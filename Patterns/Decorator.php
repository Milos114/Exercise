<?php

/**
 * Interface SoundInterface
 */
interface SoundInterface
{
    public function getSound();
}

class HalfLife implements SoundInterface
{
    /**
     * @return string
     */
    public function getSound()
    {
        return 'Humiliation';
    }
}

class HeadShot implements SoundInterface
{
    protected $sound;

    /**
     * HeadShot constructor.
     * @param SoundInterface $sound
     */
    public function __construct(SoundInterface $sound)
    {
        $this->sound = $sound;
    }

    /**
     * @return string
     */
    public function getSound()
    {
        return 'Head Shot' . " then " . $this->sound->getSound();
    }
}


class FirstBlood implements SoundInterface
{
    protected $sound;

    /**
     * FirstBlood constructor.
     * @param SoundInterface $sound
     */
    public function __construct(SoundInterface $sound)
    {
        $this->sound = $sound;
    }

    /**
     * @return string
     */
    public function getSound()
    {
        return 'First Blood' . " then " . $this->sound->getSound();
    }
}

echo (new FirstBlood(new HeadShot(new HalfLife())))->getSound();
