<div id="container">
    <h1>Welcome to Skedjul!</h1>

    <div id="body">
        <div id="login_form">

            <?php
                echo heading('Your Account', 3);

                echo "Username : " . $user['username'];
                echo br(1);
                echo "Email Address : " . $user['email_address'];
                echo br(1);
                echo "First Name : " . $user['firstname'];
                echo br(1);
                echo "Last Name : " . $user['lastname'];
                echo br(3);

                echo anchor('user/update', 'Update');
                echo br(2);
            ?>

        </div>
    </div>
        <?php
        /*
            echo heading('User account settings', 3);
            echo validation_errors();
            if (isset($errors['warning'])) {
                echo $errors['warning'];
            }

            echo form_open();
            echo form_fieldset('Information');
            echo form_input(array(
                'name'        => 'username',
                'placeholder'       => $this->session->userdata('username'),
                'readonly'    => true ));
            echo form_input(array(
                'name'        => 'email_address',
                'placeholder'       => $this->session->userdata('email_address'),
                'readonly'    => true ));
            echo form_input(array(
               'name'        => 'firstname',
               'placeholder'       => $this->session->userdata('firstname'),
               'readonly'    => true ));
            echo form_input(array(
               'name'        => 'lastname',
               'placeholder'       => $this->session->userdata('lastname'),
               'readonly'    => true ));
            echo anchor('home/account/info', 'Edit');
            echo form_fieldset_close();

            echo form_open();
            echo form_fieldset('Password');
               echo form_password(array('name' =>'password','placeholder' => '**********', 'readonly' => true));
               echo anchor('home/account/password', 'Edit');
            echo form_fieldset_close();

            echo br(2);
            echo anchor('calendar', 'Back to Dashboard')
            */
        ?>
</div>
