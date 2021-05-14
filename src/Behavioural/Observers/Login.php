<?php

namespace Caleb\Behavioural\Observers;

class Login implements Observable
{
	const LOGIN_ACCESS = "Login Successful";

	const LOGIN_WRONG_PASS = "Wrong Credentials";

	const LOGIN_USER_UNKNOWN = "Kindly register. No data match";

	private array $status;

	private array $observers = [];

	private $storage;

	public function attach(Observer $observer)
	{
		$this->observers[] = $observer;
	}

	public function detach(Observer $observer)
	{
		$this->observers = array_filter(
			$this->observers,
			function ($ob) use ($observer) {
				return (! ($ob === $observer));
			}
		);
	}

	public function notify()
	{
		foreach ($this->observers as $obs) {
			$obs->update($this);
		}
	}

	public function handleLogin(string $user, string $pass, string $ip)
	{
		switch (rand(1, 3)) {
			case 1:
				$this->setStatus(self::LOGIN_ACCESS, $user, $ip);
				$isvalid = true;
				break;
			case 2:
				$this->setStatus(self::LOGIN_WRONG_PASS, $user, $ip);
				$isvalid = false;
				break;
			case 3:
				$this->setStatus(self::LOGIN_USER_UNKNOWN, $user, $ip);
				$isvalid = false;
				break;
		}
		
		$this->notify();

		return $isvalid;
	}

	public function setStatus($message, string $user, string $ip)
	{
		$this->status = [$message, $user, $ip];
	}

	public function getStatus(): array
	{
		return $this->status;
	}


}