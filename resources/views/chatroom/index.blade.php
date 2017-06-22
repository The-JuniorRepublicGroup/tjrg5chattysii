@extends('layouts.app')

@section('content')

      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">


            <div class="panel-heading">Chatroom</div>
            <div class="panel-body">
              <chat-log :messages="messages"></chat-log>
            </div>
            <div class="panel-footer">
              <chat-composer v-on:messagesent="addMessage"></chat-composer>
            </div>


          </div>
        </div>
      </div>
@endsection
