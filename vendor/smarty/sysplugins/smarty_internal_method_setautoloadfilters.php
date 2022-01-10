ss="collapse navbar-collapse" id="navbarsExample05">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item<?php if ($_smarty_tpl->tpl_vars['page']->value == '') {?> active<?php }?>">
            <a class="nav-link" href="index.php"><?php echo $_smarty_tpl->tpl_vars['menu_news']->value;?>
</a>
          </li>
          <li class="nav-item<?php if ($_smarty_tpl->tpl_vars['page']->value == 'mail') {?> active<?php }?>">
            <a class="nav-link" href="index.php?page=mail"><?php echo $_smarty_tpl->tpl_vars['menu_mails']->value;
if ($_smarty_tpl->tpl_vars['mailes']->value != 0) {?><sup><span class='badge badge-pill badge-primary'><?php echo $_smarty_tpl->tpl_vars['mailes']->value;?>
</span></sup><?php }?></a>
          </li>
          <li class="nav-item<?php if ($_smarty_tpl->tpl_vars['page']->value == 'tasks') {?> active<?php }?>">
            <a class="nav-link" href="index.php?page=tasks"><?php echo $_smarty_tpl->tpl_vars['menu_tasks']->value;
if ($_smarty_tpl->tpl_vars['tasks']->value != 0) {?><sup><span class='badge badge-pill badge-primary'><?php echo $_smarty_tpl->tpl_vars['tasks']->value;?>
</span></sup><?php }?></a>
          </li>
          <li class="nav-item<?php if ($_smarty_tpl->tpl_vars['page']->value == 'doc') {?> active<?php }?>">
            <a class="nav-link" href="index.php?page=doc"><?php echo $_smarty_tpl->tpl_vars['menu_doc']->value;?>
</a>
          </li>
          <li class="nav-item<?php if ($_smarty_tpl->tpl_vars['page']->value == 'agent') {?> active<?php }?>">
            <a class="nav-link" href="index.php?page=agent"><?php echo $_smarty_tpl->tpl_vars['menu_agent']->value;?>
</a>
          </li>
          <li class="nav-item<?php if ($_smarty_tpl->tpl_vars['page']->value == 'employees') {?> active<?php }?>">
            <a class="nav-link" href="index.php?page=employees"><?php echo $_smarty_tpl->tpl_vars['menu_employees']->value;?>
</a>
          </li>

        </ul>
        <div class="btn-group dropleft">
  <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php echo $_smarty_tpl->tpl_vars['login']->value;?>

    <?php if ($_smarty_tpl->tpl_vars['nots']->value != 0) {?><sup><span class='badge badge-pill badge-p