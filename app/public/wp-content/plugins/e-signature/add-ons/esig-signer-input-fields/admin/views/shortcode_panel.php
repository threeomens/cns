<div id="esig-sif-admin-panel" style="display:none;">
    <div class="esig-sif-main-panels">
        <?php
        $asset_dir = ESIGN_ASSETS_DIR_URI;
        ?>
        <!-- textbox panel start here  -->
        <div class="esigpanel esig-sif-panel-textfield" style="display:none;">
            <div class="sif_popup_container">
                <div class="sif_popup_left">
                    <div class="sif_text_signer_info"> </div>
                    <div class="sif_text_placeholder_Text">
                        <?php _e('Enter your placeholder text', 'esig'); ?><br>
                        <input type="text" name="textbox" value="" placeholder="Placeholder Text">
                    </div>
                </div>
                <div class="sif_popup_right" valign="top">
                    <!-- textbox advanced area -->
                    <div class="sif_advanced_button_area" align="right">
                        <button id="sif_textbox_advanced_button" class="advanced-button esig-icon-settings">
                            <?php _e('Advanced', 'esig'); ?>
                        </button>
                    </div>
                    <!-- others area start here -->
                    <div class="sif_others_area">
                        <input type="checkbox" class="required" name="required" checked><?php _e('Required', 'esig'); ?>
                    </div>
                </div>
            </div>
            <p style="clear: both;"></p>
            <div align="left">

                <select id="text_field_display_type" style="width:460px">
                    <option value="border"><?php _e('Create a border around submitted results', 'esig'); ?></option>
                    <option value="underline"><?php _e('Underline submitted results', 'esig'); ?></option>
                    <option value="plaintext"><?php _e('Display the submitted results as plain text(no border or underline)', 'esig'); ?></option>
                </select>

            </div>

            <div class="popup_submit_area" align="center">
                <a class="esig-mini-btn esig-blue-btn insert-btn display-type">
                    <?php _e('Insert Text Field', 'esig'); ?>
                </a>
            </div>

            <div class="sif_textbox_advanced_content" style="display:none;">
                Max Width: <input type="text" id="maxsize" name="textbox_width" size="4" value="">Px
                <hr width="100%">
                <span class="sif-advanced-text">
                    <?php _e('Tips: you can adjust the size of your text field by using '
                        . 'the text box above. See the result in real time', 'esig'); ?>
                </span>
            </div>
            <div id="esign-sif-signer-msg" class="esig-sif-signer-message" style="display:none;">
                <?php _e('*You must assign this field to a specific signer.', 'esig'); ?><br>
                <?php _e('Please select a signer from the dropdown and try again.', 'esig'); ?>
            </div>
            <div id="esign-sif-size-msg" class="esig-sif-signer-message" style="display:none;">
                <?php _e('*You must input only number in input field size..', 'esig'); ?>
            </div>
        </div>
        <!-- ************** textbox panel end here ************ -->

        <!-- ############# file upload panel start here ############ -->
        <div class="esigpanel esig-sif-panel-file" style="display:none;">
            <p class="sif-file-upload-instructions">
                <?php _e('Allow your signer to upload a file to your document', 'esig'); ?>
            </p>
            <div class="sif_popup_main_file">
                <div class="esig-sif-popup-left">
                    <div class="sif_file_signer_info"> </div>
                    <div class="esig-table">
                        Enter your field label
                        <a href="#" class="tooltip">
                            <img src="<?php echo ESIGN_ASSETS_DIR_URI; ?>/images/help.png" height="17px" width="17px" align="left" />
                            <span class="file-upload-tooltip">
                                <?php _e('A field label is text that will live above your file upload form.', 'esig'); ?>
                            </span>
                        </a>
                        <br>
                        <input type="text" name="filelabel" placeholder="optional" value="">
                    </div>

                </div>
                <div class="esig-sif-popup-right">
                    <!-- textbox advanced area -->
                    <div id="sif-file-advanced-button" class="sif_advanced_button_area" align="right">
                        <button id="sif_file_advanced_button" class="advanced-button esig-icon-settings">
                            <?php _e('Advanced', 'esig'); ?>
                        </button>
                    </div>
                    <!-- others area start here -->
                    <div class="sif_others_area">
                        <input type="checkbox" class="required" name="required" checked><?php _e('Required', 'esig'); ?>
                    </div>
                </div>
            </div> <!-- sif popup main file end here  -->
            <div style="display:inline-flex;margin:15px 0;">
                <a href="#" class="tooltip">
                    <img src="<?php echo ESIGN_ASSETS_DIR_URI; ?>/images/help.png" height="17px" width="17px" align="left" />
                    <span class="file-upload-tooltip">
                        <?php _e('Allowed file extensions for file uploads.  This will limit the type of files a user can upload.', 'esig'); ?>
                    </span>
                </a>
                Allowed file extensions are jpg, gif, png, pdf
            </div>
            <div style="margin:25px 0;" align="center">
                <a class="esig-mini-btn esig-blue-btn insert-file">
                    <?php _e('Insert Upload Form', 'esig'); ?>
                </a>
            </div>
            <div class="sif_file_advanced_content" style="display:none;">
                Max File Size:
                <span id="esig-new-html">
                    <input type="text" id="max-file-size" size="4" name="max_file_size" value="<?php echo (int)(ini_get('upload_max_filesize')); ?>">
                </span>MB
                <hr width="100%">
                <span class="sif-advanced-text">
                    <?php _e('Specify the maximum file size in megabytes allowed for the uploaded files.', 'esig'); ?>
                </span>
                <hr width="100%">
                <?php _e('Maximum allowed in this server :', 'esig'); ?> <?php echo (int)(ini_get('upload_max_filesize')) . "MB"; ?>
            </div>

            <div id="esign-sif-signer-msg" class="esig-sif-signer-message validate-msg" style="display:none;">
                <?php _e('*You must assign this field to a specific signer.', 'esig'); ?></br>
                <?php _e('Please select a signer from the dropdown and try again.', 'esig'); ?>
            </div>
            <div id="esign-sif-extension-msg" class="esig-sif-signer-message validate-msg" style="display:none;">
                <?php _e('*You must input file extension to a specific signer.', 'esig'); ?>
            </div>

        </div>
        <!-- ********** file upload panel end here ************** -->

        <!-- ############ text area panel start here ############### -->
        <div class="esigpanel esig-sif-panel-textarea" style="display:none;">
            <div class="sif_popup_container">
                <div class="sif_popup_left">
                    <div class="sif_textarea_signer_info"> </div>
                    <div class="sif_textarea_placeholder_Text"><br />
                        <em><?php _e('Enter your placholder text below', 'esig'); ?></em>
                        <textarea id="esig-textarea-input" class="esig-sif-textarea-style area-small" name="textarea" cols="20" rows="5" placeholder="E.g. How tall are you?"></textarea>
                    </div>
                </div>
                <div class="sif_popup_right" valign="top">
                    <!-- textbox advanced area -->
                    <div class="sif_advanced_button_area" align="right">
                        <button id="sif_textarea_advanced_button" class="advanced-button esig-icon-settings">
                            <?php _e('Advanced', 'esig_sif'); ?>
                        </button>
                    </div>
                    <!-- others area start here -->
                    <div class="sif_others_area">
                        <input type="checkbox" class="required" name="required" checked><?php _e('Required', 'esig'); ?>
                    </div>
                </div>
            </div>

            <div class="" align="left">

                <select id="text_area_display_type" style="width:460px">
                    <option value="border"><?php _e('Create a border around submitted results', 'esig'); ?></option>
                    <option value="underline"><?php _e('Underline submitted results', 'esig'); ?></option>
                    <option value="plaintext"><?php _e('Display the submitted results as plain text(no border or underline)', 'esig'); ?></option>
                </select>

            </div>

            <div class="popup_submit_area" align="center">
                <a class="esig-mini-btn esig-blue-btn insert-btn display-type">
                    <?php _e('Insert Paragraph Text', 'esig'); ?>
                </a>
            </div>

            <input type="hidden" id="text-area-size-temp" value="small">
            <div class="sif_textarea_advanced_content" style="display:none;">
                <div align="center"><?php _e('Field Size', 'esig'); ?> <br />
                    <select name="esig_textarea_type" id="esig-textarea-size">
                        <option value="small"><?php _e('Small', 'esig'); ?></option>
                        <option value="medium"><?php _e('Medium', 'esig'); ?></option>
                        <option value="big"><?php _e('Big', 'esig'); ?></option>
                    </select>
                </div>

                <hr width="100%">
                <span class="sif-advanced-text">
                    <?php _e('Tips: you can adjust the size of your text area by using '
                        . 'the option above. See the result in real time', 'esig'); ?>
                </span>
            </div>
            <div id="esign-sif-signer-msg" class="esig-sif-signer-message" style="display:none;">
                <?php _e('*You must assign this field to a specific signer.', 'esig'); ?></br>
                <?php _e('Please select a signer from the dropdown and try again.', 'esig'); ?>
            </div>
            <div id="esign-sif-size-msg" class="esig-sif-signer-message" style="display:none;">
                <?php _e('*You must input only number in input field size..', 'esig'); ?>
            </div>
        </div>
        <!-- ************ textarea panel end here *********** -->


        <!-- ################## date panel start here ##############  -->

        <div class="esigpanel esig-sif-panel-datepicker" style="display:none;">
            <div align="center" class="esig-sif-popup-logo">
                <img src="<?php echo ESIGN_ASSETS_DIR_URI; ?>/images/logo.svg">
            </div>
            <p align="center" class="esig-sif-instructions">
                <?php _e('Add a date picker for your signer to fill out.', 'esig'); ?>
            </p>
            <div class="sif_popup_main_datepicker">
                <div class="sif_popup_left">

                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <?php _e('Enter your field label (Optional)', 'esig'); ?><br><br>
                        <input type="text" name="datepickerlabel" value="">

                        <br><br>
                        <input type="checkbox" class="required" name="required" checked><?php _e('Required', 'esig'); ?>
                        <input type="checkbox" class="esig-picker-readonly" name="esig_datepicker_readonly" checked><?php _e('Read only', 'esig'); ?>

                    </div>
                    <div class="col-sm-6">
                        <?php _e('Custom date range (Optional)', 'esig'); ?><br><br>
                        <?php _e('Min date:', 'esig'); ?> <input type="text" placeholder="mm/dd/yyyy" name="datepickerstartdate" value=""><br><br>
                        <?php _e('Max date:', 'esig'); ?> <input type="text" placeholder="mm/dd/yyyy" name="datepickerenddate" value="">
                    </div>
                </div>
            </div>

            <div class="container" style="margin-top: 1rem;" align="left">

                <select id="datepicker_display_type" style="width:460px">
                    <option value="border"><?php _e('Create a border around submitted results', 'esig'); ?></option>
                    <option value="underline"><?php _e('Underline submitted results', 'esig'); ?></option>
                    <option value="plaintext"><?php _e('Display the submitted results as plain text(no border or underline)', 'esig'); ?></option>
                </select>

            </div>

            <div class="container" style="margin-top: 1rem;" align="center">
                <a class="esig-mini-btn esig-blue-btn insert-date display-type">
                    <?php _e('Insert Date', 'esig'); ?>
                </a>
            </div>

            <div id="esign-sif-signer-msg" class="esig-sif-signer-message" style="display:none;">
                <?php _e('*You must assign this field to a specific signer.', 'esig'); ?></br>
                <?php _e('Please select a signer from the dropdown and try again.', 'esig'); ?>
            </div>
        </div>
        <!-- ************* date panel end here ************ -->



        <!-- ################## signed date panel start here ##############  -->

        <div class="esigpanel esig-sif-panel-todaydate" style="display:none;">
            <div align="center" class="esig-sif-popup-logo">
                <img src="<?php echo ESIGN_ASSETS_DIR_URI; ?>/images/logo.svg">
            </div>
            <p align="center" class="esig-sif-instructions">
                <?php _e('Add a date field to fill automatically.', 'esig'); ?>
            </p>
            <div class="sif_popup_main_todaydate">
                <div class="sif_popup_left">

                </div>
            </div>
            <p></p>

            <div class="container" align="left">

                <select id="todaydate_display_type" style="width:460px">
                    <option value="border"><?php _e('Create a border around submitted results', 'esig'); ?></option>
                    <option value="underline"><?php _e('Underline submitted results', 'esig'); ?></option>
                    <option value="plaintext"><?php _e('Display the submitted results as plain text(no border or underline)', 'esig'); ?></option>
                </select>

            </div>

            <div class="container" style="margin-top:25px;" align="center">
                <a class="esig-mini-btn esig-blue-btn insert-todaydate display-type">
                    <?php _e('Insert signed date', 'esig'); ?>
                </a>
            </div>
            <div id="esign-sif-signer-msg" class="esig-sif-signer-message" style="display:none;">
                <?php _e('*You must assign this field to a specific signer.', 'esig'); ?></br>
                <?php _e('Please select a signer from the dropdown and try again.', 'esig'); ?>
            </div>
        </div>
        <!-- ************* signed date panel end here ************ -->




        <!-- ########## radio panel start here #################### -->
        <div class="esigpanel esig-sif-panel-radio" style="display:none;">
            <div class="sif_popup_container">
                <div class="sif_popup_left">
                    <div class="sif_radio_signer_info"> </div>
                    <div class="sif_text_placeholder_Text">
                        <?php _e(' Enter your field label(Optional)', 'esig'); ?><br>
                        <input type="text" name="radiolabel" value=" ">
                    </div>

                </div>
                <div class="sif_popup_right" valign="top">
                    <!-- textbox advanced area -->
                    <div class="sif_advanced_button_area">
                        <button id="sif_radio_advanced_button" class="advanced-button esig-icon-settings">
                            <?php _e('Advanced', 'esig'); ?>
                        </button>
                    </div>
                    <!-- others area start here -->
                    <div class="sif_others_area">
                        <input type="checkbox" class="required" name="required" checked><?php _e('Required', 'esig'); ?>
                    </div>
                </div>
            </div>
            <div class="esig-sif-title-box">
                <?php _e(' Add Radio Buttons', 'esig'); ?>
            </div>

            <div class="radio_button">

                <ul id="radio_html">

                    <li>
                        <input type="radio" name="esig-radio-sif" />
                        <input type="text" name="label[]" placeholder="Label" value="" />
                        <input type="hidden" class="hidden_radio" name="" value="">
                        <span class="esig-icon-plus" id="addRadio"></span>
                    </li>
                </ul>
            </div>

            <div class="popup_submit_area" align="center">
                <a class="esig-mini-btn esig-blue-btn insert-btn">
                    <?php _e('Insert Radio Buttons', 'esig'); ?>
                </a>
            </div>
            <div class="sif_radio_advanced_content" style="display:none;text-align:justify;">
                <div class="sif_alignment">
                    <input type="radio" name="sif_radio_position" id="radio_vertical" checked value="vertical"><?php _e('Display vertically', 'esig'); ?>
                    <span class="esig-default">
                        <?php _e('(Default)', 'esig'); ?>
                    </span>
                    <br>
                    <input type="radio" name="sif_radio_position" id="radio_horizontal" value="horizontal"><?php _e('Display horizontally', 'esig'); ?>
                </div>
                <hr width="100%">
                <span class="sif-advanced-text">
                    <?php _e('Tips: you can choose for your radio buttons to be displayed'
                        . 'vertically or horizontally on your document here.', 'esig'); ?>
                </span>
            </div>

            <div id="esign-sif-signer-msg" class="esig-sif-signer-message" style="display:none;">
                <?php _e('*You must assign this field to a specific signer.', 'esig'); ?></br>
                <?php _e('Please select a signer from the dropdown and try again.', 'esig'); ?>
            </div>
        </div>
        <!-- ********************* Radio panel end here ***************** -->


        <!-- ################ checkbox start here ###################### -->
        <div class="esigpanel esig-sif-panel-checkbox" style="display:none;">
            <div class="sif_popup_container">
                <div class="sif_popup_left">
                    <div class="sif_checkbox_signer_info"> </div>
                    <div class="sif_text_placeholder_Text">
                        <?php _e('Enter your field label(Optional)', 'esig'); ?><br>
                        <input type="text" name="checkboxlabel" value="">
                    </div>

                </div>
                <div class="sif_popup_right" valign="top">
                    <!-- textbox advanced area -->
                    <div id="sif-checkbox-advanced-button" class="sif_advanced_button_area">
                        <button id="sif_checkbox_advanced_button" class="advanced-button esig-icon-settings">
                            <?php _e('Advanced', 'esig'); ?>
                        </button>
                    </div>
                    <!-- others area start here -->
                    <div class="sif_others_area">
                        <input type="checkbox" class="required" name="required" checked><?php _e('Required', 'esig'); ?>
                    </div>
                </div>
            </div>

            <div class="esig-sif-title-box"><?php _e(' Add Checkbox Buttons', 'esig'); ?></div>

            <div class="checkbox_button">
                <ul id="checkbox_html-rupom">

                    <li>
                        <input type="checkbox" name="" />
                        <input type="text" name="label[]" placeholder="Label" value="" />
                        <input type="hidden" class="hidden_checkbox" name="" value="">
                        <span class="esig-icon-plus" id="addCheckbox"> </span>
                    </li>
                </ul>
            </div>

            <div class="popup_submit_area" align="center">
                <a class="esig-mini-btn esig-blue-btn insert-btn">
                    <?php _e('Insert Checkboxes Buttons', 'esig'); ?>
                </a>
            </div>
            <div class="sif_checkbox_advanced_content" style="display:none;">
                <div class="sif_alignment">
                    <input type="radio" name="sif_checkbox_position" id="box-vertical" checked value="vertical"><?php _e('Display vertically', 'esig'); ?>
                    <span class="esig-default"><?php _e('(Default)', 'esig-sif'); ?></span> <br>
                    <input type="radio" name="sif_checkbox_position" id="box-horizontal" value="horizontal"><?php _e('Display horizontally', 'esig'); ?>
                </div>
                <hr width="100%">
                <span class="sif-advanced-text">
                    <?php _e('Tips: you can choose for your radio buttons to be displayed'
                        . 'vertically or horizontally on your document here.', 'esig'); ?>
                </span>
            </div>

            <div id="esign-sif-signer-msg" class="esig-sif-signer-message" style="display:none;">
                <?php _e('*You must assign this field to a specific signer.', 'esig'); ?></br>
                <?php _e('Please select a signer from the dropdown and try again.', 'esig'); ?>
            </div>
        </div>
        <!-- *******************checkbox end here ********************** -->


        <!-- sif dropdown menu start here  -->


        <div class="esigpanel esig-sif-panel-dropdown" style="display:none;">
            <div class="sif_popup_container">
                <div class="sif_popup_left">
                    <div class="sif_dropdown_signer_info"> </div>
                    <div class="sif_text_placeholder_Text">
                        <?php _e('Enter your field label(Optional)', 'esig'); ?><br>
                        <input type="text" name="dropdownlabel" value="">
                    </div>

                </div>
                <div class="sif_popup_right" valign="top">
                    <!-- others area start here -->
                    <div class="sif_others_area">
                        <input type="checkbox" class="required" name="required" checked><?php _e('Required', 'esig'); ?>
                    </div>
                </div>

            </div>

            <div class="esig-sif-title-box"><?php _e(' Add Dropdown option', 'esig'); ?></div>

            <div class="dropdown_button">
                <ul id="dropdown_html-rupom">
                    <li>
                        <input type="text" name="label[]" placeholder="Label" value="" />
                        <input type="hidden" class="hidden_dropdown" name="" value="">
                        <span class="esig-icon-plus" id="addDropdown"> </span>
                    </li>
                </ul>
            </div>


            <div class="popup_submit_area" align="center">
                <a class="esig-mini-btn esig-blue-btn insert-btn">
                    <?php _e('Insert Dropdown', 'esig'); ?>
                </a>
            </div>

            <div id="esign-sif-signer-msg" class="esig-sif-signer-message" style="display:none;">
                <?php _e('*You must assign this field to a specific signer.', 'esig'); ?></br>
                <?php _e('Please select a signer from the dropdown and try again.', 'esig'); ?>
            </div>
        </div>
        <!-- sif dropdown menu end here -->
    </div>



</div>