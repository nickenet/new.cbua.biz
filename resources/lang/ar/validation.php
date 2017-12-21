<?php

return [
    
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
	
	'accepted'             => 'يجب قبول :attribute',
	'active_url'           => ':attribute لا يُمثّل رابطًا صحيحًا',
	'after'                => 'يجب على :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
	'after_or_equal'       => ':attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
	'alpha'                => 'يجب أن لا يحتوي :attribute سوى على حروف',
	'alpha_dash'           => 'يجب أن لا يحتوي :attribute على حروف، أرقام ومطّات.',
	'alpha_num'            => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',
	'array'                => 'يجب أن يكون :attribute ًمصفوفة',
	'before'               => 'يجب على :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
	'before_or_equal'      => ':attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date',
	'between'              => [
		'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
		'file'    => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
		'string'  => 'يجب أن يكون عدد حروف النّص :attribute بين :min و :max',
		'array'   => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max',
	],
	'boolean'              => 'يجب أن تكون قيمة :attribute إما true أو false ',
	'confirmed'            => 'حقل التأكيد غير مُطابق للحقل :attribute',
	'date'                 => ':attribute ليس تاريخًا صحيحًا',
	'date_format'          => 'لا يتوافق :attribute مع الشكل :format.',
	'different'            => 'يجب أن يكون الحقلان :attribute و :other مُختلفان',
	'digits'               => 'يجب أن يحتوي :attribute على :digits رقمًا/أرقام',
	'digits_between'       => 'يجب أن يحتوي :attribute بين :min و :max رقمًا/أرقام ',
	'dimensions'           => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
	'distinct'             => 'للحقل :attribute قيمة مُكرّرة.',
	'email'                => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',
	'exists'               => 'القيمة المحددة :attribute غير موجودة',
	'file'                 => 'الـ :attribute يجب أن يكون ملفا.',
	'filled'               => ':attribute إجباري',
	'image'                => 'يجب أن يكون :attribute صورةً',
	'in'                   => ':attribute لاغٍ',
	'in_array'             => ':attribute غير موجود في :other.',
	'integer'              => 'يجب أن يكون :attribute عددًا صحيحًا',
	'ip'                   => 'يجب أن يكون :attribute عنوان IP صحيحًا',
	'ipv4'                 => 'يجب أن يكون :attribute عنوان IPv4 صحيحًا.',
	'ipv6'                 => 'يجب أن يكون :attribute عنوان IPv6 صحيحًا.',
	'json'                 => 'يجب أن يكون :attribute نصآ من نوع JSON.',
	'max'                  => [
		'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر لـ :max.',
		'file'    => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت',
		'string'  => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',
		'array'   => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر.',
	],
	'mimes'                => 'يجب أن يكون ملفًا من نوع : :values.',
	'mimetypes'            => 'يجب أن يكون ملفًا من نوع : :values.',
	'min'                  => [
		'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر لـ :min.',
		'file'    => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت',
		'string'  => 'يجب أن يكون طول النص :attribute على الأقل :min حروفٍ/حرفًا',
		'array'   => 'يجب أن يحتوي :attribute على الأقل على :min عُنصرًا/عناصر',
	],
	'not_in'               => ':attribute لاغٍ',
	'numeric'              => 'يجب على :attribute أن يكون رقمًا',
	'present'              => 'يجب تقديم :attribute',
	'regex'                => 'صيغة :attribute .غير صحيحة',
	'required'             => ':attribute مطلوب.',
	'required_if'          => ':attribute مطلوب في حال ما إذا كان :other يساوي :value.',
	'required_unless'      => ':attribute مطلوب في حال ما لم يكن :other يساوي :values.',
	'required_with'        => ':attribute مطلوب إذا توفّر :values.',
	'required_with_all'    => ':attribute مطلوب إذا توفّر :values.',
	'required_without'     => ':attribute مطلوب إذا لم يتوفّر :values.',
	'required_without_all' => ':attribute مطلوب إذا لم يتوفّر :values.',
	'same'                 => 'يجب أن يتطابق :attribute مع :other',
	'size'                 => [
		'numeric' => 'يجب أن تكون قيمة :attribute مساوية لـ :size',
		'file'    => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت',
		'string'  => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالظبط',
		'array'   => 'يجب أن يحتوي :attribute على :size عنصرٍ/عناصر بالظبط',
	],
	'string'               => 'يجب أن يكون :attribute نصآ.',
	'timezone'             => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',
	'unique'               => 'قيمة :attribute مُستخدمة من قبل',
	'uploaded'             => 'فشل في تحميل الـ :attribute',
	'url'                  => 'صيغة الرابط :attribute غير صحيحة',
    
    
    // Blacklist - Whitelist
    'whitelist_email'      => 'عنوان البريد الإلكتروني هذا مدرج في القائمة السوداء.',
    'whitelist_domain'     => 'نطاق عنوان بريدك الإلكتروني مدرج في القائمة السوداء.',
    'whitelist_word'       => 'The :attribute contains a banned words or phrases.',
    'whitelist_word_title' => 'The :attribute contains a banned words or phrases.',
    
    
    // Custom Rules
    'mb_between'           => 'The :attribute must be between :min and :max characters.',
    'recaptcha'            => 'The :attribute field is not correct.',
    'phone'                => 'The :attribute field contains an invalid number.',
    'dumbpwd'              => 'كلمة المرور هذه شائعة جدا. يرجى المحاولة آخر!',
    'phone_number'         => 'رقم هاتفك غير صالح.',
    'valid_username'       => 'The :attribute field must be an alphanumeric string.',
    'allowed_username'     => 'The :attribute is not allowed.',
    
    
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    
    'custom' => [
		
		'mysql_connection' => [
			'required' => 'لا يمكن الاتصال بخادم ميسكل',
		],
		'database_not_empty' => [
			'required' => 'قاعدة البيانات ليست فارغة',
		],
		'promo_code_not_valid' => [
			'required' => 'الرمز الترويجي غير صالح',
		],
		'smtp_valid' => [
			'required' => 'لا يمكن الاتصال بخادم سمتب',
		],
		'yaml_parse_error' => [
			'required' => 'لا يمكن تحليل يمل. الرجاء التحقق من بناء الجملة',
		],
		'file_not_found' => [
			'required' => 'لم يتم العثور على الملف.',
		],
		'not_zip_archive' => [
			'required' => 'الملف ليس حزمة زيب.',
		],
		'zip_archive_unvalid' => [
			'required' => 'لا يمكن قراءة الحزمة.',
		],
		'custom_criteria_empty' => [
			'required' => 'لا يمكن أن تكون المعايير المخصصة فارغة',
		],
		'php_bin_path_invalid' => [
			'required' => 'فب غير صالح للتنفيذ. يرجى التحقق مرة أخرى.',
		],
		'can_not_empty_database' => [
			'required' => 'لا يمكن دروب جداول معينة، يرجى تنظيف قاعدة البيانات الخاصة بك يدويا وحاول مرة أخرى.',
		],
		'recaptcha_invalid' => [
			'required' => 'فحص ريكابتشا غير صالح.',
		],
		'payment_method_not_valid' => [
			'required' => 'حدث خطأ ما في إعداد طريقة الدفع. يرجى التحقق مرة أخرى.',
		],
    
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    
    'attributes' => [
        
        'gender'                => 'جنس',
        'name'                  => 'اسم',
        'first_name'            => 'الاسم الاول',
        'last_name'             => 'الكنية',
        'user_type'             => 'نوع المستخدم',
        'country'               => 'بلد',
        'phone'                 => 'هاتف',
        'address'               => 'عنوان',
        'mobile'                => 'التليفون المحمول',
        'sex'                   => 'جنس',
        'year'                  => 'عام',
        'month'                 => 'شهر',
        'day'                   => 'يوم',
        'hour'                  => 'ساعة',
        'minute'                => 'اللحظة',
        'second'                => 'ثانيا',
        'username'              => 'اسم المستخدم',
        'email'                 => 'عنوان البريد الإلكتروني',
        'password'              => 'كلمه السر',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'g-recaptcha-response'  => 'كلمة التحقق',
        'term'                  => 'شروط',
        'category'              => 'الفئة',
        'post_type'             => 'نوع آخر',
        'title'                 => 'عنوان',
        'body'                  => 'الجسم',
        'description'           => 'وصف',
        'excerpt'               => 'مقتطفات',
        'date'                  => 'تاريخ',
        'time'                  => 'زمن',
        'available'             => 'متاح',
        'size'                  => 'بحجم',
        'price'                 => 'السعر',
        'salary'                => 'راتب',
        'contact_name'          => 'اسم',
        'location'              => 'موقعك',
        'admin_code'            => 'موقعك',
        'city'                  => 'مدينة',
        'package'               => 'صفقة',
        'payment_method'        => 'طريقة الدفع او السداد',
        'sender_name'           => 'اسم',
        'subject'               => 'موضوع',
        'message'               => 'رسالة',
        'report_type'           => 'نوع التقرير',
        'file'                  => 'ملف',
        'filename'              => 'اسم الملف',
        'picture'               => 'صورة',
        'resume'                => 'استئنف',
        'login'                 => 'تسجيل الدخول',
        'code'                  => 'الشفرة',
        'token'                 => 'رمز',
        'comment'               => 'تعليق',
        'rating'                => 'تقييم',
    
    ],

];
