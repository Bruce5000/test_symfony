<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fa', array (
  'validators' => 
  array (
    'This value should be false.' => 'این مقدار باید نادرست(False) باشد.',
    'This value should be true.' => 'این مقدار باید درست(True) باشد.',
    'This value should be of type {{ type }}.' => 'این مقدار باید از نوع {{ type }} باشد.',
    'This value should be blank.' => 'این مقدار باید خالی باشد.',
    'The value you selected is not a valid choice.' => 'مقدار انتخاب شده شامل گزینه های معتبر نمی باشد.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'باید حداقل {{ limit }} گزینه انتخاب نمایید.|باید حداقل {{ limit }} گزینه انتخاب نمایید.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'حداکثر {{ limit }} گزینه می توانید انتخاب نمایید.|حداکثر {{ limit }} گزینه می توانید انتخاب نمایید.',
    'One or more of the given values is invalid.' => 'یک یا چند مقدار نامعتبر وجود دارد.',
    'The fields {{ fields }} were not expected.' => 'فیلدهای {{ fields }} شامل فیلدهای مورد انتظار نمی باشند.',
    'The fields {{ fields }} are missing.' => 'فیلدهای {{ fields }} کم هستند.',
    'This value is not a valid date.' => 'این مقدار یک تاریخ معتبر نمی باشد.',
    'This value is not a valid datetime.' => 'این مقدار یک تاریخ و زمان معتبر نمی باشد.',
    'This value is not a valid email address.' => 'این یک رایانامه معتبر نمی باشد.',
    'The file could not be found.' => 'فایل یافت نشد.',
    'The file is not readable.' => 'پرونده خواندنی نمی باشد.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'فایل بیش از اندازه بزرگ است({{ size }} {{ suffix }}). حداکثر اندازه مجاز برابر با {{ limit }} {{ suffix }} می باشد.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'این نوع فایل مجاز نمی باشد({{ type }}). نوع های مجاز شامل {{ types }} می باشند.',
    'This value should be {{ limit }} or less.' => 'این مقدار باید کوچکتر و یا مساوی {{ limit }} باشد.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'بسیار طولانی است.حداکثر تعداد حروف مجاز برابر {{ limit }} می باشد.|بسیار طولانی است.حداکثر تعداد حروف مجاز برابر {{ limit }} می باشد.',
    'This value should be {{ limit }} or more.' => 'این مقدار باید بزرگتر و یا مساوی {{ limit }} باشد.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'مقدار وارد شده بسیار کوتاه است.تعداد حروف وارد شده، باید حداقل شامل {{ limit }} کاراکتر باشد.|مقدار وارد شده بسیار کوتاه است.تعداد حروف وارد شده، باید حداقل شامل {{ limit }} کاراکتر باشد.',
    'This value should not be blank.' => 'این مقدار نباید خالی باشد.',
    'This value should not be null.' => 'این مقدار باید شامل چیزی باشد.',
    'This value should be null.' => 'این مقدار باید شامل چیزی نباشد.',
    'This value is not valid.' => 'این مقدار معتبر نمی باشد.',
    'This value is not a valid time.' => 'این مقدار یک زمان صحیح نمی باشد.',
    'This value is not a valid URL.' => 'این مقدار شامل یک URL معتبر نمی باشد.',
    'The two values should be equal.' => 'دو مقدار باید با یکدیگر برابر باشند.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'فایل بیش از اندازه بزرگ است. حداکثر اندازه مجاز برابر با {{ limit }} {{ suffix }} می باشد.',
    'The file is too large.' => 'فایل بیش از اندازه بزرگ می باشد.',
    'The file could not be uploaded.' => 'بارگذاری فایل با شکست مواجه گردید.',
    'This value should be a valid number.' => 'این مقدار باید یک عدد معتبر باشد.',
    'This file is not a valid image.' => 'این فایل یک تصویر نمی باشد.',
    'This is not a valid IP address.' => 'این مقدار یک IP معتبر نمی باشد.',
    'This value is not a valid language.' => 'این مقدار یک زبان صحیح نمی باشد.',
    'This value is not a valid locale.' => 'این مقدار یک محل صحیح نمی باشد.',
    'This value is not a valid country.' => 'این مقدار یک کشور صحیح نمی باشد.',
    'This value is already used.' => 'این مقدار قبلا مورد استفاده قرار گرفته است.',
    'The size of the image could not be detected.' => 'اندازه تصویر قابل شناسایی نمی باشد.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'طول تصویر بسیار بزرگ است({{ width }}px). بیشینه طول مجاز {{ max_width }}px می باشد.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'طول تصویر بسیار کوچک است({{ width }}px). کمینه طول موردنظر {{ min_width }}px می باشد.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'ارتفاع تصویر بسیار بزرگ است({{ height }}px). بیشینه ارتفاع مجاز {{ max_height }}px می باشد.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'ارتفاع تصویر بسیار کوچک است({{ height }}px). کمینه ارتفاع موردنظر {{ min_height }}px می باشد.',
    'This value should be the user\'s current password.' => 'این مقدار می بایست کلمه عبور کنونی کاربر باشد.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => ' این مقدار می بایست دقیقا {{ limit }} کاراکتر داشته باشد.| این مقدار می بایست دقیقا {{ limit }} کاراکتر داشته باشد.',
    'The file was only partially uploaded.' => 'پرونده به صورت جزیی بارگذاری گردیده است.',
    'No file was uploaded.' => 'هیچ پرونده ای بارگذاری نگردیده است.',
    'No temporary folder was configured in php.ini.' => 'پوشه موقتی در php.ini پیکربندی نگردیده است.',
    'Cannot write temporary file to disk.' => 'فایل موقتی را نمی توان در دیسک نوشت.',
    'A PHP extension caused the upload to fail.' => 'یک اکستنشن PHP موجب شد که بارگذاری فایل با شکست مواجه گردد.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'این مجموعه می بایست دارای حداقل {{ limit }} عنصر یا بیشتر باشد.|این مجموعه می بایست دارای حداقل {{ limit }} عنصر یا بیشتر باشد.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'این مجموعه می بایست دارای حداکثر {{ limit }} عنصر یا کمتر باشد.|این مجموعه می بایست دارای حداکثر {{ limit }} عنصر یا کمتر باشد.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'این مجموعه می بایست به طور دقیق دارای {{ limit }} عنصر باشد.|این مجموعه می بایست به طور دقیق دارای {{ limit }} عنصر باشد.',
    'Invalid card number.' => 'شماره کارت نامعتبر می باشد.',
    'Unsupported card type or invalid card number.' => 'نوع کارت پشتیبانی نمی شود و یا شماره کارت نامعتبر می باشد.',
    'This is not a valid International Bank Account Number (IBAN).' => 'این یک شماره حساب بانک بین المللی معتبر نمی باشد(IBAN).',
    'This value is not a valid ISBN-10.' => 'این مقدار یک ISBN-10 معتبر نمی باشد.',
    'This value is not a valid ISBN-13.' => 'این مقدار یک ISBN-13 معتبر نمی باشد.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'این مقدار یک ISBN-10 صحیح و یا ISBN-13 معتبر نمی باشد.',
    'This value is not a valid ISSN.' => 'این مقدار یک ISSN معتبر نمی باشد.',
    'This value is not a valid currency.' => 'این مقدار یک واحد پول معتبر نمی باشد.',
    'This value should be equal to {{ compared_value }}.' => 'این مقدار باید برابر با {{ compared_value }} باشد.',
    'This value should be greater than {{ compared_value }}.' => 'این مقدار باید از {{ compared_value }} بیشتر باشد.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'این مقدار باید بزرگتر و یا مساوی با {{ compared_value }} باشد.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'این مقدار باید با {{ compared_value_type }} {{ compared_value }} یکسان باشد.',
    'This value should be less than {{ compared_value }}.' => 'این مقدار باید کمتر از {{ compared_value }} باشد.',
    'This value should be less than or equal to {{ compared_value }}.' => 'این مقدار باید کمتر و یا مساوی با {{ compared_value }} باشد.',
    'This value should not be equal to {{ compared_value }}.' => 'این مقدار نباید با {{ compared_value }} برابر باشد.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'این مقدار نباید با {{ compared_value_type }} {{ compared_value }} یکسان باشد.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'ابعاد({{ ratio }}) عکس بیش از حد بزرگ است.حداکثر ابعاد مجاز {{ max_ratio }} می باشد.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'ابعاد({{ ratio }}) عکس بیش از حد کوچک است.حداقل ابعاد مجاز {{ min_ratio }} می باشد.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'این تصویر یک مربع({{ width }}x{{ height }}px) می باشد. تصویر مربع مجاز نمی باشد.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'این تصویر افقی({{ width }}x{{ height }}px) می باشد. تصویر افقی مجاز نمی باشد.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'این تصویر عمودی({{ width }}x{{ height }}px) می باشد. تصویر عمودی مجاز نمی باشد.',
    'An empty file is not allowed.' => 'پرونده خالی مجاز نمی باشد.',
    'The host could not be resolved.' => 'میزبان قابل حل نمی باشد.',
    'This value does not match the expected {{ charset }} charset.' => 'این مقدار مطابق با مقدار مورد انتظار {{ charset }} نمی باشد.',
    'This is not a valid Business Identifier Code (BIC).' => 'این مقدار یک(BIC) معتبر نمی باشد.',
    'Error' => 'خطا',
    'This is not a valid UUID.' => 'این مقدار یک UUID معتبر نمی باشد.',
    'This value should be a multiple of {{ compared_value }}.' => 'این مقدار باید چند برابر {{ compared_value }} باشد.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'این(BIC) با IBAN ارتباطی ندارد.',
    'This value should be valid JSON.' => 'این مقدار باید یک JSON معتبر باشد.',
    'This collection should contain only unique elements.' => 'این مجموعه باید تنها شامل عناصر یکتا باشد.',
    'This value should be positive.' => 'این مقدار باید مثبت باشد.',
    'This value should be either positive or zero.' => 'این مقدار باید مثبت یا صفر باشد.',
    'This value should be negative.' => 'این مقدار باید منفی باشد.',
    'This value should be either negative or zero.' => 'این مقدار باید منفی یا صفر باشد.',
    'This value is not a valid timezone.' => 'این مقدار یک منطقه‌زمانی (timezone) معتبر نیست.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'این رمزعبور در یک رخنه‌ی اطلاعاتی نشت کرده است. لطفاً از یک رمزعبور دیگر استفاده کنید.',
    'This value should be between {{ min }} and {{ max }}.' => 'این مقدار باید بین {{ min }} و {{ max }} باشد',
    'This value is not a valid hostname.' => 'این مقدار یک hostname معتبر نیست.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'تعداد عناصر این مجموعه باید ضریبی از {{ compared_value }} باشد.',
    'This value should satisfy at least one of the following constraints:' => 'این مقدار باید حداقل یکی از محدودیت‌های زیر را ارضا کند:',
    'Each element of this collection should satisfy its own set of constraints.' => 'هر یک از عناصر این مجموعه باید دسته محدودیت‌های خودش را ارضا کند.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'این مقدار یک شماره شناسایی بین‌المللی اوراق بهادار (ISIN) معتبر نیست.',
    'This form should not contain extra fields.' => 'این فرم نباید شامل فیلدهای اضافی باشد.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'فایل بارگذاری‌شده بسیار بزرگ است. لطفاً فایل کوچک‌تری را بارگذاری نمایید.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'توکن CSRF نامعتبر است. لطفاً فرم را مجدداً ارسال نمایید.',
    'This value is not a valid HTML5 color.' => 'این مقدار یک رنگ معتبر HTML5  نیست.',
    'Please enter a valid birthdate.' => 'لطفاً یک تاریخ تولد معتبر وارد نمایید.',
    'The selected choice is invalid.' => 'گزینه‌ی انتخاب‌شده نامعتبر است',
    'The collection is invalid.' => 'این مجموعه نامعتبر است.',
    'Please select a valid color.' => 'لطفاً یک رنگ معتبر انتخاب کنید.',
    'Please select a valid country.' => 'لطفاً یک کشور معتبر انتخاب کنید.',
    'Please select a valid currency.' => 'لطفاً یک واحد پولی معتبر انتخاب کنید.',
    'Please choose a valid date interval.' => 'لطفاً یک بازه‌ی زمانی معتبر انتخاب کنید.',
    'Please enter a valid date and time.' => 'لطفاً یک تاریخ و زمان معتبر وارد کنید.',
    'Please enter a valid date.' => 'لطفاً یک تاریخ معتبر وارد کنید.',
    'Please select a valid file.' => 'لطفاً یک فایل معتبر انتخاب کنید.',
    'The hidden field is invalid.' => 'فیلد مخفی نامعتبر است.',
    'Please enter an integer.' => 'لطفاً یک عدد صحیح وارد کنید.',
    'Please select a valid language.' => 'لطفاً یک زبان معتبر انتخاب کنید.',
    'Please select a valid locale.' => 'لطفاً یک جغرافیای (locale) معتبر انتخاب کنید.',
    'Please enter a valid money amount.' => 'لطفاً یک مقدار پول معتبر وارد کنید.',
    'Please enter a number.' => 'لطفاً یک عدد وارد کنید.',
    'The password is invalid.' => 'رمزعبور نامعتبر است.',
    'Please enter a percentage value.' => 'لطفاً یک درصد معتبر وارد کنید.',
    'The values do not match.' => 'مقادیر تطابق ندارند.',
    'Please enter a valid time.' => 'لطفاً یک زمان معتبر وارد کنید.',
    'Please select a valid timezone.' => 'لطفاً یک منطقه‌زمانی معتبر وارد کنید.',
    'Please enter a valid URL.' => 'لطفاً یک URL معتبر وارد کنید.',
    'Please enter a valid search term.' => 'لطفاً یک عبارت جستجوی معتبر وارد کنید.',
    'Please provide a valid phone number.' => 'لطفاً یک شماره تلفن معتبر وارد کنید.',
    'The checkbox has an invalid value.' => 'کادر انتخاب (checkbox)  دارای مقداری نامعتبر است.',
    'Please enter a valid email address.' => 'لطفاً یک آدرس رایانامه‌ی معتبر وارد کنید.',
    'Please select a valid option.' => 'لطفاً یک گزینه‌ی معتبر انتخاب کنید.',
    'Please select a valid range.' => 'لطفاً یک محدوده‌ی معتبر انتخاب کنید.',
    'Please enter a valid week.' => 'لطفاً یک هفته‌ی معتبر وارد کنید.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'خطایی هنگام احراز هویت رخ داده است.',
    'Authentication credentials could not be found.' => 'شرایط احراز هویت یافت نشد.',
    'Authentication request could not be processed due to a system problem.' => 'درخواست احراز هویت به دلیل  وجود مشکل در سیستم قابل پردازش نمی باشد.',
    'Invalid credentials.' => 'احراز هویت نامعتبر می باشد.',
    'Cookie has already been used by someone else.' => 'Cookie قبلا توسط شخص دیگری استفاده گردیده است.',
    'Not privileged to request the resource.' => 'دسترسی لازم برای درخواست از این منبع را دارا نمی باشید.',
    'Invalid CSRF token.' => 'توکن CSRF معتبر نمی باشد.',
    'Digest nonce has expired.' => 'Digest nonce منقضی گردیده است.',
    'No authentication provider found to support the authentication token.' => 'هیچ ارایه دهنده احراز هویتی برای پشتیبانی از توکن احراز هویت پیدا نشد.',
    'No session available, it either timed out or cookies are not enabled.' => 'هیچ جلسه‌ای در دسترس نمی باشد. این میتواند به دلیل پایان یافتن زمان و یا فعال نبودن کوکی ها باشد.',
    'No token could be found.' => 'هیچ توکنی پیدا نشد.',
    'Username could not be found.' => 'نام ‌کاربری پیدا نشد.',
    'Account has expired.' => 'حساب کاربری منقضی گردیده است.',
    'Credentials have expired.' => 'مجوزهای احراز هویت منقضی گردیده‌اند.',
    'Account is disabled.' => 'حساب کاربری غیرفعال می باشد.',
    'Account is locked.' => 'حساب کاربری قفل گردیده است.',
    'Too many failed login attempts, please try again later.' => 'تلاش‌های ناموفق زیادی برای ورود صورت گرفته است، لطفاً بعداً دوباره تلاش کنید.',
    'Invalid or expired login link.' => 'لینک ورود نامعتبر یا تاریخ‌گذشته است.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
