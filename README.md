flex-random
===========

multiple generators for random content

```php
require_once 'vendor/autoload.php';

use Flex\Random\Text\RandomAdjective;
use Flex\Random\Text\RandomChar;
use Flex\Random\Text\RandomFirstname;
use Flex\Random\Text\RandomLastname;
use Flex\Random\Text\RandomFullname;
use Flex\Random\Text\RandomProject;
use Flex\Random\Text\RandomSentence;
use Flex\Random\Text\RandomText;
use Flex\Random\Text\RandomWord;

RandomFirstname::getFirstnameFemale();
RandomFirstname::getFirstnameMale();

RandomLastname::getLastname();

RandomFullname::getFullnameFemale();
RandomFullname::getFullnameMale();

RandomAdjective::getAdjective();

RandomProject::getProjectNameMale();
RandomProject::getProjectNameFemale();

RandomWord::get();
RandomWord::consonant();
RandomWord::vowel();

RandomSentence::get();
RandomText::get();
```