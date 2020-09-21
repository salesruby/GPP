@extends('layouts.modal')
@section('modal-id')
    quote-response-modal
@overwrite
@section('modal-title')
    Send Invoice and Response to Quote
@overwrite
@section('modal-content')
    <div>
        <form id="quote-response-form" enctype="multipart/form-data">
            @csrf
            <textarea aria-invalid="true" name="description"
                      id="description"
                      cols="50" rows="3" class="form-control" required="required" placeholder="Enter Message"
                      aria-required="true"></textarea>
            <input type="file" name="attachment" class="form-control">
            <span>*Note: Document should not be more than 2Mb</span>
            <input type="hidden" name="quote_id" value="{{$quote->id}}">
        </form>
    </div>
@overwrite
@section('modal-footer')
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary" form="quote-response-form">Submit</button>
@overwrite

