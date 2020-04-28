<?php 
function get_single_by_id($id)
{
    global $db;
    $singles = $db->query("SELECT * FROM phones WHERE id = $id");
    foreach ($singles as $single) 
    {
        return $single;
    }
}  

function get_single_by_id_pract($id)
{
    global $db;
    $singles = $db->query("SELECT * FROM pract WHERE id = $id");
    foreach ($singles as $single) 
    {
    return $single;
    }
} 
function get_single_by_id_news($id)
{
    global $db;
    $singles = $db->query("SELECT * FROM news WHERE id = $id");
    foreach ($singles as $single) 
    {
        return $single;
    }
}
function get_single_by_id_dost($id)
{
    global $db;
    $singles = $db->query("SELECT * FROM dost WHERE id = $id");
    foreach ($singles as $single) 
    {
        return $single;
    }
}
function get_single_by_id_mclass($id)
{
    global $db;
    $singles = $db->query("SELECT * FROM mclasses WHERE id = $id");
    foreach ($singles as $single) 
    {
        return $single;
    }
}
function get_user_by_id($id)
{
    global $db;
    $singles = $db->query("SELECT * FROM users WHERE id = $id");
    foreach ($singles as $single) 
    {
        return $single;
    }
}
function get_single_by_id_blog($id)
{
    global $db;
    $singles = $db->query("SELECT * FROM blog WHERE id = $id");
    foreach ($singles as $single) 
    {
        return $single;
    }
}
?>