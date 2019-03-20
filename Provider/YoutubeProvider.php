<?php

namespace Donjohn\MediaBundle\Provider;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Donjohn\MediaBundle\Model\Media;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Response;

class YoutubeProvider extends BaseProvider
{
    private $youtubeUrl;

    public function __construct()
    {
        $this->youtubeUrl = 'https://www.youtube.com';
    }

    public function getAllowedTypes(): array
    {
        return [];
    }

    public function getTemplate(): string
    {
        return '@DonjohnMedia/Provider/media.'.$this->getAlias().'.html.twig';
    }

    public function getAlias(): string
    {
        return 'youtube';
    }

    public function getDownloadResponse(Media $media, array $headers = array()): Response
    {
        // TODO: Implement getDownloadResponse() method.
    }

    public function addProviderOptions(array $options): array
    {
        return $options;
    }

    public function extractMetaData(Media $media): void
    {
        // TODO: Implement extractMetaData() method.
    }

    public function postLoad(Media $media): void
    {
        // TODO: Implement postLoad() method.
    }

    public function prePersist(Media $media): void
    {
        // TODO: Implement prePersist() method.
    }

    public function postPersist(Media $media): void
    {
        // TODO: Implement postPersist() method.
    }

    public function preUpdate(Media $media): void
    {
        // TODO: Implement preUpdate() method.
    }

    public function postUpdate(Media $media): void
    {
        // TODO: Implement postUpdate() method.
    }

    public function preRemove(Media $media): void
    {
        // TODO: Implement preRemove() method.
    }

    public function addEditForm(FormInterface $form, array $options): void
    {
        $form->add('youtubeId', TextType::class, $this->addProviderOptions($options));
    }

    public function addCreateForm(FormInterface $form, array $options): void
    {
        $form->add('youtubeId', TextType::class, $this->addProviderOptions($options));
    }

    public function getPath(Media $media, string $filter = null, bool $fullPath = false): string
    {
        // TODO: Implement getPath() method.
    }

}