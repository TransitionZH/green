<?php
  namespace TransitionTeam\TransitionTools\ViewHelpers;

  use TYPO3\CMS\Core\Utility\GeneralUtility;
  use TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper;
  use TYPO3\CMS\Core\Resource\FileInterface;
  use TYPO3\CMS\Extbase\Domain\Model\AbstractFileFolder;

  class ExternalImageViewHelper extends ImageViewHelper
  {

  const UPLOAD_DIRECTORY = 'externalImages';
  const TEMP_PREFIX = 'MyExt';

  /**
   * ResourceFactory
   *
   * @var \TYPO3\CMS\Core\Resource\ResourceFactory
   * @inject
   */
  protected $resourceFactory = null;

  /**
   * Resizes a given image (if required) and renders the respective img tag
   *
   * @see https://docs.typo3.org/typo3cms/TyposcriptReference/ContentObjects/Image/
   *
   * @param string                           $src                a path to a file, a combined FAL identifier or an uid (integer). If $treatIdAsReference is set, the integer is considered the uid of the sys_file_reference record. If you already got a FAL object, consider using the $image parameter instead
   * @param string                           $width              width of the image. This can be a numeric value representing the fixed width of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.
   * @param string                           $height             height of the image. This can be a numeric value representing the fixed height of the image in pixels. But you can also perform simple calculations by adding "m" or "c" to the value. See imgResource.width for possible options.
   * @param integer                          $minWidth           minimum width of the image
   * @param integer                          $minHeight          minimum height of the image
   * @param integer                          $maxWidth           maximum width of the image
   * @param integer                          $maxHeight          maximum height of the image
   * @param boolean                          $treatIdAsReference given src argument is a sys_file_reference record
   * @param FileInterface|AbstractFileFolder $image              a FAL object
   *
   * @return string
   * @throws \Exception
   * @throws \TYPO3\CMS\Core\Resource\Exception\InsufficientFolderAccessPermissionsException
   * @throws \TYPO3\CMS\Core\Resource\Exception\InsufficientFolderWritePermissionsException
   * @throws \TYPO3\CMS\Fluid\Core\ViewHelper\Exception
   */
  public function render($src = null, $width = null, $height = null, $minWidth = null, $minHeight = null, $maxWidth = null, $maxHeight = null, $treatIdAsReference = false, $image = null)
  {
    if (filter_var($src, FILTER_VALIDATE_URL)) {
      $storage = $this->resourceFactory->getDefaultStorage();
      if (!$storage->hasFolder(self::UPLOAD_DIRECTORY)) {
        $storage->createFolder(self::UPLOAD_DIRECTORY);
      }

      $externalFile = GeneralUtility::getUrl($src);
      if ($externalFile) {
        $tempFileName = tempnam(sys_get_temp_dir(), self::TEMP_PREFIX);
        $handle       = fopen($tempFileName, "w");
        fwrite($handle, $externalFile);
        fclose($handle);

        $uploadFolder = $storage->getFolder(self::UPLOAD_DIRECTORY);
        $file         = $uploadFolder->addFile($tempFileName, basename(basename($src)), 'changeName');
        $src          = $file->getPublicUrl();
        unlink($tempFileName);
      } else {
        throw new \Exception(sprintf('External URL % cannot accessed.', $src), 1473233519);
      }
    }

    return parent::render($src, $width, $height, $minWidth, $minHeight, $maxWidth, $maxHeight, $treatIdAsReference, $image);
  }
}