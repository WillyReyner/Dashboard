<?php

//action.php
include ('conexao_site.php');

$connect = new PDO("mysql:host=localhost;dbname=appunisaude", "root", "");

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'fetch')
	{
		$order_column = array('id_user_type', 'id', 'created_at');

		$main_query = "SELECT b.name as user_type_name, a.id_user_type, DATE_FORMAT(a.created_at, '%d/%m/%Y') AS created_at, 
		SUM(a.id) AS Totalrow ,
		count(a.id) as total 
		FROM user a 
		INNER JOIN user_type AS b ON a.id_user_type = b.id ";

		$search_query = 'WHERE DATE(a.created_at) <= "'.date('Y-m-d').'" AND ';

		if(isset($_POST["start_date"], $_POST["end_date"]) && $_POST["start_date"] != '' && $_POST["end_date"] != '')
		{
			$search_query .= 'DATE(a.created_at) >= "'.$_POST["start_date"].'" AND a.created_at <= "'.$_POST["end_date"].'" AND ';
		}

		if(isset($_POST["search"]["value"]))
		{
			$search_query .= '(b.name LIKE "%'.$_POST["search"]["value"].'%" OR DATE(a.created_at) LIKE "%'.$_POST["search"]["value"].'%")';
		}

		$group_by_query = " group by DATE(a.created_at), a.id_user_type ";

		$order_by_query = "";

		if(isset($_POST["order"]))
		{
			$order_by_query = 'ORDER BY '.$order_column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
		}
		else
		{
			$order_by_query = 'ORDER BY DATE(a.created_at) DESC ';
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
			
			$sub_array[] = $row['user_type_name'];

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