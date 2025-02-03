<?php

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace Dan\Jobfair\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * The model for Contact
 *
 * @author Dan <typo3dev@outlook.com>
 * @author Ines Willenbrock <ines@insert-into.net>
 */
class Contact extends AbstractEntity
{
    /**
     * name
     */
    protected string $name = '';

    /**
     * address
     */
    protected string $address = '';

    /**
     * phone
     */
    protected string $phone = '';

    /**
     * email
     */
    protected string $email = '';

    /**
     * website
     */
    protected string $www = '';

    /**
     * contactImage
     * @var FileReference
     */
    protected $contactImage;

    /**
     * nameCc
     */
    protected string $nameCc = '';

    /**
     * emailCc
     */
    protected string $emailCc = '';

    /**
     * nameBcc
     */
    protected string $nameBcc = '';

    /**
     * emailBcc
     */
    protected string $emailBcc = '';

    /**
     * Returns the name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets the name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns the address
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Sets the address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns the phone
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * Sets the phone
     */
    public function setPhone (string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * Returns the email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Sets the email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns the www
     */
    public function getWww(): string
    {
        return $this->www;
    }

    /**
     * Sets the www
     */
    public function setWww(string $www): void
    {
        $this->www = $www;
    }

    /**
     * Returns the contactImage
     *
     * @return ObjectStorage<FileReference> $contactImage
     */
    public function getContactImage()
    {
        return $this->contactImage;
    }

    /**
     * Sets the contactImage
     *
     * @param ObjectStorage<FileReference> $contactImage
     */
    public function setContactImage($contactImage)
    {
        $this->contactImage = $contactImage;
    }

    /**
     * Returns the nameCc
     */
    public function getNameCc(): string
    {
        return $this->nameCc;
    }

    /**
     * Sets the nameCc
     */
    public function setNameCc(string $nameCc): void
    {
        $this->nameCc = $nameCc;
    }

    /**
     * Returns the emailCc
     */
    public function getEmailCc(): string
    {
        return $this->emailCc;
    }

    /**
     * Sets the emailCc
     */
    public function setEmailCc(string $emailCc): void
    {
        $this->emailCc = $emailCc;
    }

    /**
     * Returns the nameBcc
     */
    public function getNameBcc(): string
    {
        return $this->nameBcc;
    }

    /**
     * Sets the nameBcc
     */
    public function setNameBcc(string $nameBcc): void
    {
        $this->nameBcc = $nameBcc;
    }

    /**
     * Returns the emailBcc
     */
    public function getEmailBcc(): string
    {
        return $this->emailBcc;
    }

    /**
     * Sets the emailBcc
     */
    public function setEmailBcc(string $emailBcc): void
    {
        $this->emailBcc = $emailBcc;
    }
}
