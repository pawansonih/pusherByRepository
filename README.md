# Introduction
## This package will help you to send notification using pusher via repository pattern code

# Installation

```bash
$ composer require osp-pawan/pusherbyrepository
```
#### Service Provider & Facade (Optional on Laravel 5.5+)
Register provider and facade on your `config/app.php` file.
```php
'providers' => [
    ...,
    OspPawan\PusherByRepository\PusherByRepositoryServiceProvider::class,
    //Uncomment below line from your `config/app.php`
    App\Providers\BroadcastServiceProvider::class,
]
```
#### .env File changes
When Composer is done, we will need to configure Laravel to use Pusher as its broadcast driver, to do this, open the `.env` file that is in the root directory of your Laravel installation. Update the values to correspond with the configuration below:
```php
    BROADCAST_DRIVER=pusher

    // Get the credentials from your pusher dashboard
    PUSHER_APP_ID=XXXXX
    PUSHER_APP_ID=XXXXX
    PUSHER_APP_KEY=XXXXXXX
    PUSHER_APP_SECRET=XXXXXXX
```

# Simple Example

Must use below constructor in order to use PusherRepository
```php
<?php

    use OspPawan\PusherByRepository\PusherRepository;

    private $pusherRepository;

    public function __construct(PusherRepository $pusherRepository){
        $this->pusherRepository = $pusherRepository;
    }

```
Send boadcast notification to every user by using below line in the function

```php
    $this->pusherRepository->broadcastNotification('Send you message here');

```