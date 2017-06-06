<?php
namespace Model;

class Welcome extends \Model {
    public static function get_results()
    {
        try
        {
            DB::start_transaction();
                $query = DB::insert('friend', array('id', 'name','age','gender'));
                $query = DB::count_records('root')
            DB::commit_transaction();

            echo 'okay';
        }
        catch
        {
            echo 'error';
        }

}
}
