<?php
$this->Js->JqueryEngine->jQueryObject = 'jQuery';
// Paginator options
$this->Paginator->options(array(
    'update' => '#resultDiv',
    'evalScripts' => true,
));
?>
<div id="resultDiv">
    <div class="page-title">
        <div class="title-env"><h1 class="title"><?php echo __('Exams'); ?></h1></div>
    </div>
    <div class="panel">
        <?php echo $this->Session->flash(); ?>
        <div class="panel-heading">
            <div class="btn-group">
                <?php $url = $this->Html->url(array('controller' => 'Exams'));
                echo $this->Html->link('<span class="fa fa-plus-circle"></span>&nbsp;' . __('Add New Exam'), array('controller' => 'Exams', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-success'));
                echo $this->Html->link('<span class="fa fa-edit"></span>&nbsp;' . __('Edit'), 'javascript:void(0);', array('type' => 'button', 'name' => 'editallfrm', 'id' => 'editallfrm', 'onclick' => "check_perform_edit('$url');", 'escape' => false, 'class' => 'btn btn-warning'));
                echo $this->Html->link('<span class="fa fa-trash"></span>&nbsp;' . __('Delete'), 'javascript:void(0);', array('name' => 'deleteallfrm', 'id' => 'deleteallfrm', 'onclick' => 'check_perform_delete();', 'escape' => false, 'class' => 'btn btn-danger')); ?>
            </div>
        </div>
        <?php echo $this->element('pagination');
        $page_params = $this->Paginator->params();
        $limit = $page_params['limit'];
        $page = $page_params['page'];
        $serial_no = 1 * $limit * ($page - 1) + 1; ?>
        <?php echo $this->Form->create(array('name' => 'deleteallfrm', 'url' => array('action' => 'deleteall'))); ?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th><?php echo $this->Form->checkbox('checkbox', array('value' => 'deleteall', 'name' => 'selectAll', 'label' => false, 'id' => 'selectAll', 'hiddenField' => false)); ?></th>
                        <th><?php echo $this->Paginator->sort('id', __('#'), array('direction' => 'desc')); ?></th>
                        <th><?php echo $this->Paginator->sort('name', __('Exam Name'), array('direction' => 'asc')); ?></th>
                        <th><?php echo $this->Paginator->sort('start_date', __('Start & End Date'), array('direction' => 'asc')); ?></th>
                        <th><?php echo __('Groups'); ?></th>
                        <th><?php echo $this->Paginator->sort('type', __('Type'), array('direction' => 'asc')); ?></th>
                        <th><?php echo $this->Paginator->sort('status', __('Status'), array('direction' => 'asc')); ?></th>
                        <th><?php echo __('Result'); ?></th>
                        <th><?php echo __('Action'); ?></th>
                    </tr>
                    <?php foreach ($Exam as $post):
                        $id = $post['Exam']['id']; ?>
                        <tr>
                            <td><?php echo $this->Form->checkbox(false, array('value' => $post['Exam']['id'], 'name' => 'data[Exam][id][]', 'id' => "DeleteCheckbox$id", 'class' => 'chkselect')); ?></td>
                            <td><?php echo $serial_no++; ?></td>
                            <td><?php echo h($post['Exam']['name']); ?></td>
                            <td><?php echo $this->Time->format($dtFormat, $post['Exam']['start_date']); ?>
                                to <?php echo $this->Time->format($dtFormat, $post['Exam']['end_date']); ?></td>
                            <td><?php echo $this->Function->showGroupName($post['Group']); ?></td>
                            <td><?php echo __($post['Exam']['type']); ?></td>
                            <td><?php if ($post['Exam']['status'] == "Active") echo $this->Html->link(__($post['Exam']['status']), array('action' => 'activateexam', $id, 'Inactive'), array('class' => 'btn btn-success'));
                                elseif ($post['Exam']['status'] == "Closed") echo '<span class="label label-danger">' . __($post['Exam']['status']) . '</span>';
                                else echo $this->Html->link(__($post['Exam']['status']), array('action' => 'activateexam', $id), array('class' => 'btn btn-info')); ?></td>
                            <td>
                                <div class="text-left"><?php if ($post['Exam']['status'] != "Inactive") {
                                    echo $this->Html->link('<span class="fa fa-file-excel-o"></span>&nbsp;' . __('Download Result'), array('controller' => 'Downloadresults', 'action' => 'index', $id), array('class' => 'btn btn-info', 'escape' => false));
                                } ?></td>
                            <td class="pbutton">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                            aria-expanded="false">
                                        <?php echo __('Action'); ?> <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <?php if ($post['Exam']['type'] == "Exam" && $post['Exam']['status'] == "Inactive") { ?>
                                            <li><?php echo $this->Html->link('<span class="fa fa-plus"></span>&nbsp;' . __('Add Questions'), array('controller' => 'Addquestions', 'action' => "index", $id), array('escape' => false)); ?></li><?php } ?>
                                        <li><?php echo $this->Html->link('<span class="fa fa-arrows-alt"></span>&nbsp;' . __('View'), 'javascript:void(0);', array('onclick' => "show_modal('$url/View/$id');", 'escape' => false)); ?></li>
                                        <li><?php echo $this->Html->link('<span class="fa fa-file-excel-o"></span>&nbsp;' . __('Export Feedback'), array('action' => 'exportfeedback', $id), array('escape' => false)); ?></li>
                                        <li><?php echo $this->Html->link('<span class="fa fa-file-excel-o"></span>&nbsp;' . __('Export Browser Tolrance'), array('action' => 'exporttolrance', $id), array('escape' => false)); ?></li>
                                        <?php if ($post['Exam']['type'] == "Exam" && $post['Exam']['status'] == "Inactive") { ?>
                                            <li><?php echo $this->Html->link('<span class="fa fa-server"></span>&nbsp;' . __('Questions Attempt Count'), 'javascript:void(0);', array('onclick' => "show_modal('$url/maxquestion/$id');", 'escape' => false)); ?></li><?php } ?>
                                        <?php if ($post['Exam']['status'] == "Closed") { ?>
                                            <li><?php echo $this->Html->link('<span class="fa fa-server"></span>&nbsp;' . __('Stats'), 'javascript:void(0);', array('onclick' => "show_modal('$url/stats/$id');", 'escape' => false)); ?></li><?php } ?>
                                        <?php if ($post['Exam']['type'] == "Exam"){?><li><?php echo $this->Html->link('<span class="fa fa-arrows-alt"></span>&nbsp;' . __('View Questions'), array('controller' => 'Addquestions', 'action' => "viewQuestion/$id"), array('escape' => false)); ?></li><?php }?>
                                        <li><?php echo $this->Html->link('<span class="fa fa-edit"></span>&nbsp;' . __('Edit'), 'javascript:void(0);', array('name' => 'editallfrm', 'onclick' => "check_perform_sedit('$url','$id');", 'escape' => false)); ?></li>
                                        <li><?php echo $this->Html->Link('<span class="fa fa-trash"></span>&nbsp;' . __('Delete'), 'javascript:void(0);', array('onclick' => "check_perform_sdelete('$id');", 'escape' => false)); ?></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php unset($post); ?>
                </table>
            </div>
            <?php echo $this->Form->end(); ?>
            <?php echo $this->element('pagination'); ?>
        </div>
    </div>
</div>