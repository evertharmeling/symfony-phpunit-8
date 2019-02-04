## Symfony project reproducer for PHPUnit 8 support bug

**Issue**: https://github.com/symfony/symfony/issues/30071

Using the `symfony/testpack`, `symfony/phpunit-bridge` and setting the `phpunit` version on `8.0`. 
When creating a test which extends `Symfony\Bundle\FrameworkBundle\Test\KernelTestCase` it will throw the following error:

```
PHP Fatal error:  Declaration of Symfony\Bundle\FrameworkBundle\Test\KernelTestCase::tearDown() must be compatible with PHPUnit\Framework\TestCase::tearDown(): void in /projects/phpunit-8/vendor/symfony/framework-bundle/Test/KernelTestCase.php on line 24
```

#### Steps to reproduce

  * Run `composer install` in project root.
  * Run `vendor/bin/simple-phpunit` in project root.
