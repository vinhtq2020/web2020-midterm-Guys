<?php
class DataProvider 
{
	public static function ExecuteQuery($sql)
	{
        $host="localhost";
        $user="root";
        $password="";
		$database="qlsv";
		
		try{
			$connection = mysqli_connect($host,$user,$password,$database);//or 				die ("couldn't connect to localhost");				
			mysqli_query($connection, "set names 'utf8'");		
			$result = mysqli_query($connection, $sql);		
            mysqli_close($connection);
            // echo "Thành công";		
			return $result;
		}catch(Exception $ex)
		{
            echo "lỗi";
			return null;
		}
	}
}
?>