<?php

declare(strict_types=1);

namespace Matiux\PhpOrderedBuilderPattern;

/**
 * @implements Builder<User>
 */
class UserBuilder implements Builder, UserNameStep, UserAgeStep, UserEmailStep
{
    private string $name;
    private string $email;
    private int $age;

    private function __construct(private bool $setDefault)
    {
        if ($setDefault) {
            $this->setDefault();
        }
    }

    public static function create(): UserNameStep
    {
        return new self(false);
    }

    public static function createDefault(): Builder
    {
        return new self(true);
    }

    private function setDefault(): void
    {
        $this->name = 'matiux';
        $this->email = 'matiux@gmail.com';
        $this->age = 27;
    }

    public function withName(string $name): UserEmailStep
    {
        $this->name = $name;

        return $this;
    }

    public function withEmail(string $email): UserAgeStep
    {
        $this->email = $email;

        return $this;
    }

    public function withAge(int $age): UserBuilder
    {
        $this->age = $age;

        return $this;
    }

    public function build(): User
    {
        return new User(
            $this->name,
            $this->email,
            $this->age,
        );
    }
}
