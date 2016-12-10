<?php if ( ! defined( 'ABSPATH' ) ) {	exit;}?>
<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
<?php wc_print_notices(); ?>
  <?php if( isset( $_GET['action']) ) : ?>
    <div class="accountbox">
      <div class="kids">	</div>
      <form method="post" class="register">

        <?php do_action( 'woocommerce_register_form_start' ); ?>

        <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
            <label for="reg_username"><?php _e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
          </p>

        <?php endif; ?>


          <input type="email" placeholder='Email*' class="input-text reginput"  name="email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" />


        <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>


            <input type="password" placeholder='Password*' class="input-text reginput" name="password" id="reg_password" />


        <?php endif; ?>

        <!-- Spam Trap -->
        <div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" autocomplete="off" /></div>

        <?php do_action( 'woocommerce_register_form' ); ?>
        <?php do_action( 'register_form' ); ?>

        

        <div class="submitbox">
            <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
	        <input type="submit" class="button fbutton" name="register" value="<?php _e( 'Register', 'woocommerce' ); ?>" />
	        <div class="already">Already have an account? <a href="http://77.206.12.2/efikobooks/my-account/">Log In</a>
	        </div>
	      </div>

        <?php do_action( 'woocommerce_register_form_end' ); ?>

      </form>
    </div> <!-- end Register Section .col-sm-6 -->
  <?php else : ?>
    <div class="accountbox">
      <form method="post" class="box" style="overflow: hidden;">
        <?php do_action( 'woocommerce_login_form_start' ); ?>
          <input type="text" placeholder='Email*' class="input-text reginput" name="username" id="username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
          <input  type="password"  placeholder='Password*' class="input-text reginput" type="password" name="password" id="password" />
          <?php do_action( 'woocommerce_login_form' ); ?>
          <div class="submitbox">
            <?php wp_nonce_field( 'woocommerce-login' ); ?>
            <input type="submit" class="button fbutton" name="login" value="<?php _e( 'Sign In', 'woocommerce' ); ?>" />
          </div>
          <?php do_action( 'woocommerce_login_form_end' ); ?>
			</form>
    </div>
    <div class="loginbottom">
      <div  class="passreset"><a href="<?php echo esc_url( wc_lostpassword_url() ); ?>"><?php _e( 'Forgot your password?', 'woocommerce' ); ?></a> </div> <!-- end Login Section .col-sm-6 -->
      <div class="regpage">Dont have an account? <a href="<?php echo get_permalink(woocommerce_get_page_id('myaccount')) . '?action=register'; ?>" class="a-button-text" role="button">Sign Up</a></div>
    </div>
<?php endif; ?>
<?php endif; ?>
