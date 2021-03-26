<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Participant $participant
 */
?>
<?= $this->Html->script('custom/participants',['block' => true]);?>
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title"><?= __('Edit Participant') ?></h3>
                    </div>
                </div>
                <div class="col-lg-9 col-xlg-8 col-md-12">
                    <?php 
                    $updateApi = \Cake\Routing\Router::url("/api/participants/" . $participant->id . ".json");
                    ?>
                    <h1>Registration</h1>
                    <form action="/" onsubmit="return false;">
                        <hr>
                        <label class="icon" for="name"><i class="fas fa-user"></i></label>
                        <input type="text" name="name" id="name" placeholder="Name" value="<?= $participant->name;?>" />

                        <label class="icon" for="name"><i class="fas fa-calendar "></i></label>
                        <input type="text" name="dob" id="dob" placeholder="MM/DD/YYYY" value="<?= $participant->dob;?>" />

                        <label class="icon" for="locality"><i class="fas fa-map-marker"></i></label>
                        <input type="text" name="locality" id="locality" placeholder="Locality" value="<?= $participant->locality;?>"/>

                        <label class="icon" for="no_of_guests"><i class="fas fa-user"></i></label>
                        <input type="number" name="no_of_guests" id="no_of_guests" placeholder="Number of Guests" value="<?= $participant->number_of_guests;?>"/>

                        <textarea name="address" id="address" class="registration-textarea" placeholder="Address" ><?= $participant->address;?></textarea>

                        <hr>
                        <div class="account-type">
                            <input type="radio" value="Employed" id="radioOne" name="profession" checked/>
                            <label for="radioOne" class="radio">Employed</label>
                            <input type="radio" value="Student" id="radioTwo" name="profession" />
                            <label for="radioTwo" class="radio">Student</label>
                        </div>
                        <hr>
                        <div class="btn-block">
                            <button type="submit" onclick="Participant.update('<?= $updateApi;?>');">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
