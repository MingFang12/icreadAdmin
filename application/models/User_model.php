<?php
class User_Model extends MY_Model{
    public function getUsersListInDashboard() {
        $users = $this->db -> users->find()->toArray();
        return $users;
    }
    public function getUserDeatil($where = array()) {
        $user = $this->db -> users->findone($where);
        $posts = $this->db -> posts->find(array('author' =>(string)($user->_id) ))->toArray();
        for ($i = 0; $i < count($posts); $i++) {          
            $post_id = (string)($posts[$i]->_id);
            $comments = $this->db -> comments->find(array('post_id' =>$post_id ))->toArray();
            $posts[$i]['user'] = $user;
            for ($j = 0; $j < count($comments); $j++) {
                $comments[$j]['user'] =  $this->db -> users->findone(array('_id' =>new MongoDB\BSON\ObjectID($comments[$j]['commmenter_user_id'])));
            }
            $posts[$i]['comments'] = $comments;
        }
        $user['posts'] = $posts;
        return $user;
    }

    public function blockUser($whereArray = array(), $setArray = array()) {
        $user = $this->db -> users->updateOne($whereArray, ['$set' => $setArray]);       
        return $user;
    }


}