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

use TYPO3\CMS\Extbase\Annotation\FileUpload;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * The model for Application
 *
 * @author Dan <typo3dev@outlook.com>
 */
class Application extends AbstractEntity
{
    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    protected string $message = '';

    #[FileUpload([
        'validation' => [
            'required' => false,
            'maxFiles' => 6,
            'fileSize' => ['minimum' => '0K', 'maximum' => '20M'],
            'mimeType' => ['allowedMimeTypes' => ['application/pdf', 'application/zip', 'application/rar']],
        ],
        'uploadFolder' => '1:/user_upload/tx_jobfair/applications',
    ])]
    protected ?FileReference $attachment = null;

    /**
     * jobs
     *
     * @var ObjectStorage<Job>
     */
    protected $jobs;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     */
    protected function initStorageObjects()
    {
        $this->jobs = new ObjectStorage();
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns the attachment
     */
    public function getAttachment(): ?FileReference
    {
        return $this->attachment;
    }

    /**
     * Sets the attachment
     */
    public function setAttachment(?FileReference $attachment): void
    {
        $this->attachment = $attachment;
    }

    /**
     * Adds a Job
     *
     * @param Job $job
     */
    public function addJob(Job $job): void
    {
        $this->jobs->attach($job);
    }

    /**
     * Removes a Job
     *
     * @param Job $jobToRemove The Job to be removed
     */
    public function removeJob(Job $jobToRemove): void
    {
        $this->jobs->detach($jobToRemove);
    }

    /**
     * Returns the jobs
     *
     * @return ObjectStorage<Job> $jobs
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * Sets the jobs
     *
     * @param ObjectStorage<Job> $jobs
     */
    public function setJobs(ObjectStorage $jobs): void
    {
        $this->jobs = $jobs;
    }
}
