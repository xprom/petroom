<?php
    xSys::Smarty()->assign('title','PINKUP HAT PROFIL.<br />
UND ÜBER 100 JAHRE<br />
ERFAHRUNG<span class="pink">*</span>.');

    xSys::Smarty()->assign('ballon','<div class="baloon-comment">
                <p>
                    9 topmotivierte Mitarbeitende<br />
zwischen ganz frisch und gut<br />
gereift legen zusammen 104 Jahre<br />
Branchenerfahrung in die Waagschale.
                </p>
            </div>');


    $teams = xSys::Db()->select()
                       ->from(con_DBPreffix.'team')
                       ->order('ord')
                       ->query()
                       ->fetchAll();

    xSys::Smarty()->assign('teams',array_merge($teams,$teams,$teams));

    xSys::Smarty()->assign('index',4);

    xSys::Smarty()->assign('content','../modules/team/templates/index.tpl');



    if(!empty(xSys::$in['id']) || !empty(xSys::$query_dir[1]))
    {
        $id = str_replace('/','',xSys::$in['id']);
        if(!empty(xSys::$query_dir[1]))
            $id = xSys::$query_dir[1];

        $el = xSys::Db()->select()
                       ->from(con_DBPreffix.'team')
                       ->where('name_link=?',$id)
                       ->query()
                       ->fetch();

        $text_arr = xSys::Db()->select()
                              ->from(con_DBPreffix.'team_text')
                              ->where('team_id=?',$el['id'])
                              ->order('ord')
                              ->query()
                              ->fetchAll();

        xSys::Smarty()->assign('text_arr', $text_arr);

        xSys::Smarty()->assign('el', $el);
        xSys::Smarty()->assign('sk1', $el['sk1']);
        xSys::Smarty()->assign('sk2', $el['sk2']);
        xSys::Smarty()->assign('sk3', $el['sk3']);
        xSys::Smarty()->assign('sk4', $el['sk4']);
        xSys::Smarty()->assign('sk5', $el['sk5']);
        xSys::Smarty()->assign('sk6', $el['sk6']);
        xSys::Smarty()->assign('sk7', $el['sk7']);
        xSys::Smarty()->assign('sk8', $el['sk8']);
        xSys::Smarty()->assign('sk9', $el['sk9']);
        xSys::Smarty()->assign('sk10', $el['sk10']);

        if(!empty(xSys::$in['id']))
        {
            print xSys::Smarty()->display('../modules/team/templates/index2.tpl');
            exit();
        }
        else
        {
            xSys::Smarty()->assign('text',xSys::Smarty()->fetch('../modules/team/templates/index2.tpl'));
        }
    }


    if(xSys::Tools()->isAjaxRequest())
    {
        $return = array();
        $return['head_index'] = 4;
        $return['head_title'] = xSys::Smarty()->get_template_vars('title');
        $return['content'] = xSys::Smarty()->fetch(xSys::Smarty()->get_template_vars('content'));
        $return['script'] = 'team();';
        print json_encode($return);
        exit();
    }

?>