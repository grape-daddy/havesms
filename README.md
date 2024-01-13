
## HaveSMS API
```
[https://www.havesms.co.th](https://www.havesms.co.th)
```

## การใช้งาน

### ติดตั้งผ่าน Composer
```
composer require ksnth/havesms
```

### ขั้นตอนการใช้งาน
### Check Balance
```php
require_once __DIR__ . '/vendor/autoload.php';

use Ksnth\HaveSMS\SMS;

$sms = new SMS([
    'token'   => 'Api Tokens from HaveSMS',
]);

echo $sms->balance();
```