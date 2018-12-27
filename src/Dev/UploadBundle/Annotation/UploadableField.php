<?php
/**
 * Created by PhpStorm.
 * User: arsen_000
 * Date: 05-02-18
 * Time: 14:34
 */

namespace Dev\UploadBundle\Annotation;

use Doctrine\Common\Annotations\Annotation\Target;


/**
 * @Annotation
 * @Target("PROPERTY")
 */
class UploadableField
{
    /**
     * @var string
     */
    private $filename;

    /**
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
    /**
     * @var string
     */
    private $path;
    public function __construct(array $options)
    {
        if(empty($options['filename'])){
            throw new \InvalidArgumentException("L\'annotation UploadableField doit avoir un attribut 'filename ou image'");
        }
        if(empty($options['path'])){
            throw new \InvalidArgumentException("L\'annotation UploadableField doit avoir un attribut 'path'");
        }
        $this->filename = $options['filename'];
        $this->path = $options['path'];
    }

}