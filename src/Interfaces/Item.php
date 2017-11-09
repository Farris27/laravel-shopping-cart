<?php namespace Lachezargrigorov\Cart\Interfaces;

interface Item
{

    //TODO: This is not implemented yet
    /** Checks whether the item is active
     * @return bool
     */

    //public function isActive();

    //TODO: This is not implemented yet
    /** Checks weather the item is orderable
     * @return bool
     */

    //public function isOrderable();

    /** Return the item (product) price
     *  which will be used from the cart
     *
     * @return double
     */
    public function getCartPrice();
}
