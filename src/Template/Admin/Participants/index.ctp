<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Participant[]|\Cake\Collection\CollectionInterface $participants
 */
?>
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12 col-xlg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    echo $this->Form->create('',[
                        'method' => "get",
                        'class' => 'form-horizontal form-material'
                    ]);
                    ?>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-4">
                                    <div class="col-md-12 border-bottom p-0">
                                        <?php
                                        echo $this->Form->input('name',[
                                            'placeholder' => 'Participant Name',
                                            'class' => 'form-control p-0 border-0',
                                            'value' => $queryData['name']
                                        ])
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-4">
                                    <div class="col-md-12 border-bottom p-0">
                                        <?php
                                        echo $this->Form->input('locality',[
                                            'placeholder' => 'Participant Locality',
                                            'class' => 'form-control p-0 border-0',
                                            'value' => $queryData['locality']
                                        ])
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-4" style="margin-bottom: 0px;">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    echo $this->Form->end();
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title"><?= __('Participants') ?></h3>
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <tr>
                                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('dob') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('profession') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('locality') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('number_of_guests','No Of Guest') ?></th>
                                    <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($participants as $participant): ?>
                                <tr>
                                    <td><?= $this->Number->format($participant->id) ?></td>
                                    <td><?= h($participant->name) ?></td>
                                    <td><?= h($participant->age) ?></td>
                                    <td><?= h($participant->dob) ?></td>
                                    <td><?= h($participant->profession) ?></td>
                                    <td><?= h($participant->locality) ?></td>
                                    <td><?= h($participant->number_of_guests) ?></td>
                                    <td><?= h($participant->address) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $participant->id]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="paginator">
                        <ul class="pagination">
                            <?= $this->Paginator->first('<< ' . __('first')) ?>
                            <?= $this->Paginator->prev('< ' . __('previous')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('next') . ' >') ?>
                            <?= $this->Paginator->last(__('last') . ' >>') ?>
                        </ul>
                        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->


<?php
$this->start('scriptBottom');
?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.preloader').fadeOut();
    })
</script>
<?php
$this->end();
?>

