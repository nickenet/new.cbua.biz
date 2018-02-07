<?php

return [
	
	/*
	|--------------------------------------------------------------------------
	| Emails Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines are used by the Mail notifications.
	|
	*/
	
	// mail_footer
	'mail_footer_content'            => ':appName, продавати та купувати поруч з вами. Просто, швидко та ефективно.',
	
	
	// email_verification
	'email_verification_title'       => '[:appName] Будь ласка, підтвердьте свою адресу електронної пошти.',
	'email_verification_action'      => 'Перевірте адресу електронної пошти',
	'email_verification_content_1'   => 'Вітаємо :userName !',
	'email_verification_content_2'   => 'Натисніть кнопку нижче, щоб підтвердити свою адресу електронної пошти.',
	'email_verification_content_3'   => 'Кнопка не працює? Вставте таке посилання у свій браузер:<br><a href=":verificationLink">:verificationLink</a>.',
	'email_verification_content_4'   => '<br><br>Ви отримали цього електронного листа, оскільки нещодавно створили обліковий запис :appName або додали нову електронну адресу. Якщо це не ви, будь ласка, ігноруйте цей електронний лист.',
	'email_verification_content_5'   => '<br><br>Зповагою,<br>команда :appName',
	
	
	// post_activated
	'post_activated_title'             => 'Ваше оголошення було активовано',
	'post_activated_content_1'         => 'Доброго дня, <br><br>Ваше оголошення <a href=":postUrl">:title</a> було активовано.',
	'post_activated_content_2'         => '<br>Скоро його буде розглянуто одним з наших адміністраторів для його публікації в режимі онлайн.',
	'post_activated_content_3'         => '<br><br>Ви отримали цей електронний лист, оскільки ви нещодавно створили нове оголошення :appName. Якщо це не ви, будь ласка, ігноруйте цей електронний лист.',
	'post_activated_content_4'         => '<br><br>З повагою, команда <br> :appName',
	
	// post_reviewed
	'post_reviewed_title'              => 'Ваше оголошення зараз online',
	'post_reviewed_content_1'          => 'Вітаємо, <br><br>Ваше оголошення <a href=":postUrl">:title</a> online.',
	'post_reviewed_content_2'          => '<br><br>Ви отримуєте цей електронний лист, оскільки ви нещодавно створили нове оголошення :appName. Якщо це не ви, будь ласка, ігноруйте цей електронний лист.',
	'post_reviewed_content_3'          => '<br><br>З повагою, команда <br> :appName',
	
	
	// post_deleted
	'post_deleted_title'               => 'Ваше оголошення було видалено',
	'post_deleted_content_1'           => 'Доброго дня,<br><br>Ваше оголошення ":title" на сайті <a href=":appUrl">:appName</a> було видалено :now.',
	'post_deleted_content_2'           => '<br><br>Дякуємо за те що ви з нами, з повагою',
	'post_deleted_content_3'           => '<br><br>Команда :appName',
	'post_deleted_content_4'           => '<br><br><br>PS: Цього листа сформовано автоматично, будь ласка, не відповідайте на нього.',
	
	
	// post_seller_contacted
	'post_seller_contacted_title'      => 'Ваше оголошення ":title" на сайті :appName',
	'post_seller_contacted_content_1'  => '<strong>Контактна інформація :</strong><br>Ім\'я : :name<br>Електронна пошта : :email<br>Номер телефону : :phone<br><br>Цей лист був відправлений вам з приводу оголошення ":title" на сайті <a href=":appUrl">:appName</a> : <a href=":postUrl">:postUrl</a>',
	'post_seller_contacted_content_2'  => '<br><br>PS : Особа, яка зв\'язалася з вами, не знає вашу електронну пошту.',
	'post_seller_contacted_content_3'  => '<br><br>Не забувайте детально перевіряти свої контактні дані (ім\'я, адреса, ...) на випадок винекнення спорів.<br><br>Остерігайтеся привабливих пропозицій! Не плать кошти на перед, користуйтеся доставкою з післяоплатою або передавайте кошти при особистій зустрічі.',
	'post_seller_contacted_content_4'  => '<br><br>Дякуємо за те що ви з нами, з повагою,',
	'post_seller_contacted_content_5'  => '<br><br>Команда :appName',
	'post_seller_contacted_content_6'  => '<br><br><br>PS: Цього листа сформовано автоматично, будь ласка, не відповідайте на нього.',
	
	
	// user_deleted
	'user_deleted_title'             => 'Your account has been deleted on :appName',
	'user_deleted_content_1'         => 'Hello,<br><br>Your account has been deleted from <a href=":appUrl">:appName</a> at :now.',
	'user_deleted_content_2'         => '<br><br>Thank you for your trust and see you soon,',
	'user_deleted_content_3'         => '<br><br>The :appName Team',
	'user_deleted_content_4'         => '<br><br><br>PS: Цього листа сформовано автоматично, будь ласка, не відповідайте на нього.',
	
	
	// user_activated
	'user_activated_title'           => 'Welcome to :appName !',
	'user_activated_content_1'       => 'Welcome to :appName :userName !',
	'user_activated_content_2'       => '<br>Your account has been activated.',
	'user_activated_content_3'       => '<br><br><strong>Note : :appName team recommends that you:</strong><br><br>1 - Always beware of advertisers refusing to make you see the good offered for sale or rental,<br>2 - Never send money by Western Union or other international mandate.<br><br>If you have any doubt about the seriousness of an advertiser, please contact us immediately. We can then neutralize as quickly as possible and prevent someone less informed do become the victim.',
	'user_activated_content_4'       => '<br><br>You’re receiving this email because you recently created a new :appName account. If this wasn’t you, please ignore this email.',
	'user_activated_content_5'       => '<br><br>З повагою,<br> команда :appName',
	
	
	// reset_password
	'reset_password_title'           => 'Reset Your Password',
	'reset_password_action'          => 'Reset Password',
	'reset_password_content_1'       => 'Forgot your password?',
	'reset_password_content_2'       => 'Let\'s get you a new one.',
	'reset_password_content_3'       => 'If you did not request a password reset, no further action is required.',
	'reset_password_content_4'       => '<br><br>З повагою,<br>:appName',
	'reset_password_content_5'       => '<br><br>---<br>If you’re having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser:<br> :link',
	
	
	// contact_form
	'contact_form_title'             => 'New message from :appName',
	'contact_form_content'           => ':appName - New message',
	
	
	// post_report_sent
	'post_report_sent_title'           => 'New abuse report',
	'post_report_sent_content'         => 'New Report Abuse - :appName/:countryCode',
	'Post URL'                         => 'Post URL',
	
	
	// post_archived
	'post_archived_title'              => 'Ваше оголошення було заархівовано',
	'post_archived_content_1'          => 'Доброго дня,<br><br>Ваше оголошення  ":title" було заархівований з :appName до :now.',
	'post_archived_content_2'          => '<br><br>Ви можете поновити його, натиснувши тут : :repostLink',
	'post_archived_content_3'          => '<br><br>Якщо ви нічого не зробите, ваше оголошення буде назавжди видалено :dateDel.',
	'post_archived_content_4'          => '<br><br>Дякуємо за те що ви з нами, з повагою,',
	'post_archived_content_5'          => '<br><br>Команда :appName',
	'post_archived_content_6'          => '<br><br><br>PS: Цього листа сформовано автоматично, будь ласка, не відповідайте на нього.',
	
	
	// post_will_be_deleted
	'post_will_be_deleted_title'       => 'Ваше оголошення буде видалено :days days',
	'post_will_be_deleted_content_1'   => 'Доброго дня,<br><br>Ваше оголошення ":title" буде видалено через :days днів із :appName.',
	'post_will_be_deleted_content_2'   => '<br><br>Ви можете поновити його, натиснувши тут: :repostLink',
	'post_will_be_deleted_content_3'   => '<br><br>Якщо ви нічого не зробите, ваше оголошення буде назавжди видалено :dateDel.',
	'post_will_be_deleted_content_4'   => '<br><br>Дякуємо за те що ви з нами, з повагою,',
	'post_will_be_deleted_content_5'   => '<br><br>Команда :appName',
	'post_will_be_deleted_content_6'   => '<br><br><br>PS: Цього листа сформовано автоматично, будь ласка, не відповідайте на нього.',
	
	
	// post_notification
	'post_notification_title'          => 'New ad has been posted',
	'post_notification_content_1'      => 'Hello Admin,<br><br>The user :advertiserName has just posted a new ad.',
	'post_notification_content_2'      => '<br>The ad title: :title<br>Posted on: :now at :time',
	'post_notification_content_3'      => '<br><br>З повагою,<br>команда :appName',
	
	
	// user_notification
	'user_notification_title'        => 'New User Registration',
	'user_notification_content_1'    => 'Hello Admin,<br><br>:name has just registered.',
	'user_notification_content_2'    => '<br>Registered on: :now at :time<br>Email: <a href="mailto::email">:email</a>',
	'user_notification_content_3'    => '<br><br>З повагою,<br>команда :appName',
	
	
	// payment_sent
	'payment_sent_title'             => 'Thanks for your payment!',
	'payment_sent_content_1'         => 'Hello,<br><br>We have received your payment for the ad ":title".',
	'payment_sent_content_2'         => '<br><h1>Thank you !</h1>',
	'payment_sent_content_3'         => '<br>Kind Regards,<br>The :appName Team',
	
	
	// payment_notification
	'payment_notification_title'     => 'New payment has been sent',
	'payment_notification_content_1' => 'Hello Admin,<br><br>The user :advertiserName has just paid a package for her ad ":title".',
	'payment_notification_content_2' => '<br><br><strong>THE PAYMENT DETAILS</strong><br><strong>Reason of the payment:</strong> Ad #:adId - :packageName<br><strong>Amount:</strong> :amount :currency<br><strong>Payment Method:</strong> :paymentMethodName',
	'payment_notification_content_3' => '<br><br>Kind Regards,<br>The :appName Team',
	
	
	// reply_form
	'reply_form_title'               => 'RE: :postTitle',
	'reply_form_content_1'           => 'Hello,<br><br><strong>You have received a response from: :senderName. See answer below:</strong><br><br>',
	'reply_form_content_2'           => '<br><br>Kind Regards,<br>The :appName Team',


];
