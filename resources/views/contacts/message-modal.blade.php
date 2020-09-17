@extends('layouts.modal')

@section('modal-id')
  contact-modal
@overwrite

@section('modal-title')
    Message from <span id="contact-name"></span>
@overwrite

@section('modal-content')
    <h5></h5>
    <p></p>
@overwrite

@section('modal-footer')
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
@overwrite
