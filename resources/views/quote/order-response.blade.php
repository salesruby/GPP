@extends('layouts.modal')
@section('modal-id')
    order-response-modal
@overwrite
@section('modal-title')
    Send Invoice and Response to Order
@overwrite
@section('modal-content')
    <div>
        <form id="order-response-form" enctype="multipart/form-data">
            @csrf
            <textarea aria-invalid="true" name="description"
                      id="description"
                      cols="50" rows="3" class="form-control" required="required" placeholder="Enter Message"
                      aria-required="true"></textarea>
            <input type="file" name="attachment" class="form-control">
            <span>*Note: Document should not be more than 2Mb</span>
            <input type="hidden" name="order_id" value="{{$order->id}}">
            <input type="hidden" name="user_id" value="{{$order->user_id}}">
        </form>
    </div>
@overwrite
@section('modal-footer')
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary" form="order-response-form">Submit</button>
@overwrite

