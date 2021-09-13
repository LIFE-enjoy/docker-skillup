<?php

use Phalcon\Mvc\Controller;

class SignupController extends Controller
{
    public function indexAction()
    {

    }

    public function registerAction()
    {
        $user = new Users();

        // // データを保存し、エラーチェック
        $success = $user->save($this->request->getPost(), array('name','email'));
        if ($success) {
            echo "Thanks for registering!";
        } else {
            echo "Sorry, the following problems were generated: ";
            foreach ($user->getMessages() as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }

        $this->view->disable();

        // echo '<p>mysqlへの接続テストコード</p>';
        // $dsn = 'mysql:dbname=test_php;host=db;';
        // $user = 'test';
        // $pass = 'test';
        // try {
        //     $dbh = new PDO($dsn, $user, $pass);
        //     $sql = 'SELECT CURRENT_TIMESTAMP';
        //     foreach ($dbh->query($sql) as $row) {
        //         print "接続できている。<br/>現在時間は" . $row[0] . "です。\n";
        //     }
        //     $dbh = null;
        // } catch (PDOException $e){
        //     print('接続できていない。理由は以下<br/>[ERROR] ' . $e->getMessage() . "\n");
        //     die();
        // }
    }
}