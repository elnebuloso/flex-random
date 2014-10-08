flex-random
===========

[![Build Status](https://travis-ci.org/elnebuloso/flex-random.svg?branch=master)](https://travis-ci.org/elnebuloso/flex-random)
[![Coverage Status](https://img.shields.io/coveralls/elnebuloso/flex-random.svg)](https://coveralls.io/r/elnebuloso/flex-random)
[![Latest Stable Version](https://poser.pugx.org/elnebuloso/flex-random/v/stable.svg)](https://packagist.org/packages/elnebuloso/flex-random)
[![License](https://poser.pugx.org/elnebuloso/flex-random/license.svg)](https://packagist.org/packages/elnebuloso/flex-random)

multiple generators for random content

----------

Installation through composer: [visit me on packagist][1]

----------

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

[1]: https://packagist.org/packages/elnebuloso/flex-random