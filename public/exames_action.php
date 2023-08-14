<?php

//action.php
include ('conexao_site.php');

$connect = new PDO("mysql:host=localhost;dbname=appunisaude", "root", "");

//$Query01 = "SELECT id_user_type, COUNT(id) AS id, DATE(created_at) FROM user WHERE DATE(created_at) <= date('Y-m-d') AND $_POST[start_date], $_POST[end_date] && $_POST[start_date] != '' && $_POST[end_date] != DATE(created_at) >= $_POST[start_date] AND created_at <= $_POST[end_date] AND id_user_type LIKE '%$_POST[search][value]%' OR id LIKE '%$_POST[search][value]%' OR DATE(created_at) LIKE '%$_POST[search][value]%' GROUP BY DATE(created_at) ORDER BY DATE(created_at) DESC";
//$QueryExec01 = @mysqli_query( $connect , $Query01 );
//while($Celula01 = @mysqli_fetch_assoc( $QueryExec01 )){}

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'fetch')
	{
		$order_column = array('id','id_user', 'id_api_external_integration', 'created_at');

		$main_query = "SELECT a.id as user, a.name AS nomePaciente, b.id_user, b.id_api_external_integration, c.name AS clinica, DATE_FORMAT(b.created_at, '%d/%m/%y') AS created_at, 
		SUM(a.id) AS Totalrow ,
		count(a.id) as total FROM user_exams_api b 
		INNER JOIN user AS a 
			ON b.id_user = a.id 
		INNER JOIN api_external_integration AS c	
			ON b.id_api_external_integration = c.id ";

		$search_query = 'WHERE DATE(b.created_at) <= "'.date('Y-m-d').'" AND ';

		if(isset($_POST["start_date"], $_POST["end_date"]) && $_POST["start_date"] != '' && $_POST["end_date"] != '')
		{
			$search_query .= 'DATE(b.created_at) >= "'.$_POST["start_date"].'" AND DATE(b.created_at) <= "'.$_POST["end_date"].'" AND ';
		}

		if(isset($_POST["search"]["value"]))
		{
			$search_query .= '(a.name LIKE "%'.$_POST["search"]["value"].'%" OR c.name LIKE "%'.$_POST["search"]["value"].'%" OR DATE(b.created_at) LIKE "%'.$_POST["search"]["value"].'%")';
		}

		$group_by_query = " group by DATE(b.created_at), b.id_user ";

		$order_by_query = "";

		if(isset($_POST["order"]))
		{
			$order_by_query = 'ORDER BY '.$order_column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
		}
		else
		{
			$order_by_query = 'ORDER BY DATE(b.created_at) DESC ';
		}

		$limit_query = '';

		if($_POST["length"] != -1)
		{
			$limit_query = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}

		$statement = $connect->prepare($main_query . $search_query . $group_by_query . $order_by_query);
		
		$statement->execute();

		$filtered_rows = $statement->rowCount();

		$statement = $connect->prepare($main_query . $group_by_query);

		$statement->execute();

		$total_rows = $statement->rowCount();

		$result = $connect->query($main_query . $search_query . $group_by_query . $order_by_query . $limit_query, PDO::FETCH_ASSOC);

		$data = array();

		foreach($result as $row)
		{
			$sub_array = array();

			$sub_array[] = $row['nomePaciente'];
			
			$sub_array[] = $row['clinica'];

			$sub_array[] = $row['total'];

			$sub_array[] = $row['created_at'];

			$data[] = $sub_array;
		}
		$maxValue = max($data);

		$output = array(
			"draw"			=>	intval($_POST["draw"]),
			"recordsTotal"	=>	$total_rows,
			"recordsFiltered" => $filtered_rows,
			"data"			=>	$data
		);

		echo json_encode($output);
	}
}

$Query01 = "SELECT * FROM user";
$QueryExec01 = @mysqli_query( $ConexaoMysql , $Query01);

$total = mysqli_num_rows($QueryExec01);

?>