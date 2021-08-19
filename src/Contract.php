<?php

namespace Arf\Imgur;

interface Contract
{
    public function upload($image);
    public function delete($id);
}