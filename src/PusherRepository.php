<?php

namespace OspPawan\PusherByRepository;

/**
	 * Pusher Repository class
	 */
	class PusherRepository
	{
		public function broadcastNotification($username){
			return event(new PusherBroadcastEvent($username));
		}
	}