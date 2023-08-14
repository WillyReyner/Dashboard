<?php
if(strstr($_SERVER['HTTP_HOST'], 'localhost')!=''){
	define('DB_TYPE', 'mysql');
	define('DB_HOST', 'mariadb');
	define('DB_NAME', 'unisaude');
	define('DB_USER', 'root');
	define('DB_PASS', 'jesus');
	define('DB_CHARSET', 'utf8mb4');
}else if($_SERVER['HTTP_HOST'] == 'appunisaude.com.br' || $_SERVER['HTTP_HOST'] == 'www.appunisaude.com.br'){
    define('DB_TYPE', 'mysql');
    define('DB_HOST', '10.0.0.8');
    define('DB_NAME', 'appunisaude');
    define('DB_USER', 'root');
    define('DB_PASS', 'udc@MYSQL20');
    define('DB_CHARSET', 'utf8mb4');
}else if($_SERVER['HTTP_HOST'] == 'dev.appunisaude.com.br' || $_SERVER['HTTP_HOST'] == 'www.dev.appunisaude.com.br'){
    define('DB_TYPE', 'mysql');
    define('DB_HOST', '10.0.0.8');
    define('DB_NAME', 'appunisaude_dev');
    define('DB_USER', 'root');
    define('DB_PASS', 'udc@MYSQL20');
    define('DB_CHARSET', 'utf8mb4');
}
class Conexao
{
    /**
     * @var null Database Connection
     */
    public $db = null;
    public $table = null;
    public $primaryKey = null;

    /**
     * Sempre que o modelo for criado, abra uma conexão com o banco de dados.
     */
    function __construct()
    {
        try {
            self::openDatabaseConnection();
        } catch (\PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    /**
     * Abra a conexão com o banco de dados com as credenciais para application/config/config.php
     */
    private function openDatabaseConnection()
    {
        // defina as opções da conexão PDO. Neste caso, definimos o modo de busca para
        // "objects", o que significa que todos os resultados serão objetos, como este: $result->user_name !
        // Por exemplo, fetch mode FETCH_ASSOC retornaria resultados como este: $result["user_name] !
        // @see http://www.php.net/manual/en/pdostatement.fetch.php
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        
        // definindo a codificação é diferente ao usar PostgreSQL
        if (DB_TYPE == "pgsql") {
            $databaseEncodingenc = " options='--client_encoding=" . DB_CHARSET . "'";
        } else {
            $databaseEncodingenc = "; charset=" . DB_CHARSET;
        }

        // gerar uma conexão de banco de dados, usando o conector PDO
        // @see http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . $databaseEncodingenc, DB_USER, DB_PASS, $options);
    }
}
