<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'                            => $this->id,
            'client_id'                     => $this->client_id,
            'client_name'                   => optional($this->client)->name,
            'date'                          => $this->date,
            'readable_date'                 => timeAgoFormat($this->created_at),
            'pickup_point'                  => $this->pickup_point,
            'delivery_point'                => $this->delivery_point,
            'selected_delivery_point'       => $this->selected_delivery_point,
            'country_id'                    => $this->country_id,
            'country_name'                  => optional($this->country)->name,
            'city_id'                       => $this->city_id,
            'city_name'                     => optional($this->city)->name,
            'vehicle_type'                  => $this->vehicle_type,
            'order_type'                    => $this->order_type,
            'parcel_type'                   => $this->parcel_type,
            'total_weight'                  => $this->total_weight,
            'weight_charge'                 => $this->weight_charge,
            'distance_charge'               => $this->distance_charge,
            'total_distance'                => $this->total_distance,
            'pickup_datetime'               => $this->pickup_datetime,
            'delivery_datetime'             => $this->delivery_datetime,
            'parent_order_id'               => $this->parent_order_id,
            'status'                        => $this->status,
            'payment_id'                    => $this->payment_id,
            'payment_type'                  => optional($this->payment)->payment_type,
            'payment_status'                => optional($this->payment)->payment_status,
            'payment_collect_from'          => $this->payment_collect_from,
            'delivery_man_id'               => $this->delivery_man_id,
            'delivery_man_name'             => optional($this->delivery_man)->name,
            'fixed_charges'                 => $this->fixed_charges,
            'extra_charges'                 => $this->extra_charges,
            'charge_per_address'            => $this->charge_per_address,
            'total_amount'                  => $this->total_amount,
            'total_parcel'                  => $this->total_parcel,
            'carry_packages_charge'         => $this->carry_packages_charge,
            'reason'                        => $this->reason,
            'delivery_receiver_name'        => $this->delivery_receiver_name,
            'pickup_confirm_by_client'      => $this->pickup_confirm_by_client,
            'pickup_confirm_by_delivery_man' => $this->pickup_confirm_by_delivery_man,
            'pickup_time_signature'     =>  getSingleMedia($this, 'pickup_time_signature', null),
            'delivery_time_signature'   =>  getSingleMedia($this, 'delivery_time_signature', null),
            'auto_assign'                   => $this->auto_assign,
            'cancelled_delivery_man_ids'    => $this->cancelled_delivery_man_ids,
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_at,
            'deleted_at' => $this->deleted_at,
            'return_order_id' => $this->retunOrdered->count() > 0 ? true : false,
        ];
    }
}
