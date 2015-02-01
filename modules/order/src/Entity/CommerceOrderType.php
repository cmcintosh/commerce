<?php

/**
 * @file
 * Contains \Drupal\commerce_order\Entity\CommerceOrderType.
 */

namespace Drupal\commerce_order\Entity;

use Drupal\commerce_order\CommerceOrderTypeInterface;
use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Order type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "commerce_order_type",
 *   label = @Translation("Order type"),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\commerce_order\Form\CommerceOrderTypeForm",
 *       "edit" = "Drupal\commerce_order\Form\CommerceOrderTypeForm",
 *       "delete" = "Drupal\commerce_order\Form\CommerceOrderTypeDeleteForm"
 *     },
 *     "list_builder" = "Drupal\commerce_order\CommerceOrderTypeListBuilder",
 *   },
 *   admin_permission = "administer order types",
 *   config_prefix = "commerce_order_type",
 *   bundle_of = "commerce_order",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "edit-form" = "/admin/commerce/config/order-types/{commerce_order_type}/edit",
 *     "delete-form" = "/admin/commerce/config/order-types/{commerce_order_type}/delete"
 *   }
 * )
 */
class CommerceOrderType extends ConfigEntityBundleBase implements CommerceOrderTypeInterface {

  /**
   * The order type ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The order type label.
   *
   * @var string
   */
  protected $label;

  /**
   * A brief description of this order type.
   *
   * @var string
   */
  protected $description;

  /**
   * {@inheritdoc}
   */
  public function getDescription() {
    return $this->description;
  }

  /**
   * {@inheritdoc}
   */
  public function setDescription($description) {
    $this->description = $description;
    return $this;
  }

}