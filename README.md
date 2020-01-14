# JWPlayer
Upload multiple videos via URL on JW Player .
JW Platform API Client
The JWPlatform PHP library provides convenient access to the JW Platform Management API from applications written in the PHP language.

Visit JW Player Developer site for more information about JW Platform API.

Requirements

PHP 5.6.0 and later.

Install   Composer

You can install the bindings via Composer. Run the following command:

composer require jwplayer/jwplatform

To use the bindings, use Composer's autoload:

require_once('vendor/autoload.php');

Manual Installation

If you do not wish to use Composer, you can download the latest release. Then, to use the bindings, include the init.php file.

require_once('/path/to/jwplatform-php/init.php');

Dependencies

The bindings require the following extensions in order to work properly:

curl, although you can use your own non-cURL client if you prefer
If you use Composer, these dependencies should be handled automatically. If you install manually, you'll want to make sure that these extensions are available.
