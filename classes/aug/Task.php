<?php
/**
 * Created by PhpStorm.
 * User: kazi
 * Date: 3/8/21
 * Time: 10:04 PM
 */


namespace classes\aug;

class Task
{

    /**
     * Check $key exist in the $array.
     *
     * @param $array
     * @param $key
     * @return bool
     */
    public function hasItem($array, $key)
    {
        if (array_key_exists($key, $array)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Exclude item(s) from an array.
     *
     * @param $array
     * @param $keys
     * @return mixed
     */
    public function only($array, $keys)
    {
        if (is_array($keys)) {
            foreach ($keys as $key) {
                unset($array[$key]);
            }
        } else {
            unset($array[$keys]);
        }

        return $array;
    }
}