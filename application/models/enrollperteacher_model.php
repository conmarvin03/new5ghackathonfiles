  <?php
class Enrollperteacher extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }



    
    function getSubject()
    {
        $query = $this->db->get('subject');
        $result = $query->result();

        $cat_id = array('-CHOOSE-');
        $cat_name = array('-CHOOSE-');
        
        for ($i = 0; $i < count($result); $i++)
        {
            array_push($cat_id, $result[$i]->SubjectID);
            array_push($cat_name, $result[$i]->SubjectName);
        }
        return array_combine($cat_id, $cat_name);
    }
}
?>