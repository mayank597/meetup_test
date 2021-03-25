<?= $this->Html->script('custom/registration',['block' => true]); ?>
<h1>Registration</h1>
<form action="/" onsubmit="return false;">
    <hr>
    <label class="icon" for="name"><i class="fas fa-user"></i></label>
    <input type="text" name="name" id="name" placeholder="Name"/>

    <label class="icon" for="name"><i class="fas fa-calendar "></i></label>
    <input type="text" name="dob" id="dob" placeholder="DOB"/>

    <label class="icon" for="locality"><i class="fas fa-map-marker"></i></label>
    <input type="text" name="locality" id="locality" placeholder="Locality" />

    <label class="icon" for="no_of_guests"><i class="fas fa-user"></i></label>
    <input type="number" name="no_of_guests" id="no_of_guests" placeholder="Number of Guests" />

    <textarea name="address" class="registration-textarea" placeholder="Address" ></textarea>

    <hr>
    <div class="account-type">
        <input type="radio" value="Employed" id="radioOne" name="profession" checked/>
        <label for="radioOne" class="radio">Employed</label>
        <input type="radio" value="Student" id="radioTwo" name="profession" />
        <label for="radioTwo" class="radio">Student</label>
    </div>
    <hr>
    <div class="btn-block">
        <button type="submit" onclick="Registration.submit();">Submit</button>
    </div>
</form>
