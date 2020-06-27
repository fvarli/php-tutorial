<?php

class FTPException extends Exception{
    
}

class ftp_manager{

    public $conn_id;
    const FTP_MODE = FTP_BINARY;

    /**
     * ftp_manager constructor.
     * @param $config
     * @throws FTPException
     */
    public function __construct($config)
    {
        $this->conn_id = ftp_connect($config['host']);
        if(!$this->conn_id){
            throw new FTPException($this->get_error());
        }
        $login = ftp_login($this->conn_id, $config['username'], $config['password']);
        if(!$login){
            throw new FTPException($this->get_error());
        }
    }

    /**
     * @param $directory
     */
    public function set_directory($directory)
    {
        ftp_chdir($this->conn_id, $directory);
    }

    /**
     * @param string $directory
     * @return array
     * @throws FTPException
     */
    public function get_directory($directory = '.')
    {
       $files = ftp_nlist($this->conn_id, $directory);

       if(!$files){
           throw new FTPException($this->get_error());
       }
       return $files;
    }

    /**
     * @param $old_name
     * @param $new_name
     * @return bool
     * @throws FTPException
     */
    public function rename($old_name, $new_name)
    {
        $rename = ftp_rename($this->conn_id, $old_name, $new_name);
        if(!$rename){
            throw new FTPException($this->get_error());
        }
        return true;
    }

    /**
     * @param $file
     * @return bool
     * @throws FTPException
     */
    public function delete($file)
    {
        $delete = ftp_delete($this->conn_id, $file);
        if(!$delete){
            throw new FTPException($this->get_error());
        }
        return true;
    }

    /**
     * @param $dir_name
     * @return bool
     * @throws FTPException
     */
    public function create_dir($dir_name)
    {
        $createdir = ftp_mkdir($this->conn_id, $dir_name);

        if (!$createdir){
            throw new FTPException($this->get_error());
        }
        return $createdir;
    }

    /**
     * @param $dir_name
     * @return bool
     * @throws FTPException
     */
    public function delete_dir($dir_name)
    {
        $delete_dir = ftp_rmdir($this->conn_id, $dir_name);

        if(!$delete_dir){
            throw new FTPException($this->get_error());
        }

        return $delete_dir;
    }

    /**
     * @param $local
     * @param $remote
     * @return bool
     * @throws FTPException
     */
    public function upload_file($local, $remote)
    {
        $upload_file = ftp_put($this->conn_id, $local, $remote, self::FTP_MODE);

        if(!$upload_file){
            throw  new FTPException($this->get_error());
        }

        return true;
    }

    /**
     * @param null $local
     * @param $remote
     * @return bool
     * @throws FTPException
     */
    public function download_file($local = null, $remote)
    {
        $download = ftp_get($this->conn_id, $local, $remote, self::FTP_MODE);

        if(!$download){
            throw new FTPException($this->get_error());
        }

        return true;
    }

    /**
     * @param $remote
     * @return bool
     * @throws FTPException
     */
    public function read_file_data($remote)
    {
        $read_data = ftp_get($this->conn_id, 'php://output', $remote, self::FTP_MODE);
        if(!$read_data){
            throw new FTPException($this->get_error());
        }

        return $read_data;
    }

    /**
     * @return mixed
     */
    private function get_error(){
        $error = error_get_last();
        return $error['message'];
    }
}

try {
    $ftp = new ftp_manager([
        'host' => 'type host name',
        'username' => 'type user name',
        'password' => 'type password'
    ]);

    $ftp->set_directory('./public_html');
    //print_r($ftp->get_directory());

    //echo $ftp->rename('test', 'test_new');

    //echo  $ftp->delete('test.txt');

    //echo $ftp->create_dir('test_dir');

    // echo $ftp->delete_dir('test_dir');

    //echo $ftp->upload_file('ftp_test.txt', 'ftp_test.txt');

    //echo $ftp->download_file('download_test.txt', 'ftp_test.txt');

    $ftp->read_file_data('ftp_test.txt');

} catch (FTPException $e) {
    echo $e->getMessage();
}