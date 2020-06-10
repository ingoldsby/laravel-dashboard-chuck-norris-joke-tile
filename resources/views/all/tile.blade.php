<x-dashboard-tile :position="$position">
	<div class="absolute inset-0 p-4 my-1">
		<div class="grid gap-1 justify-items-center h-full text-center">
			<div class="font-medium text-dimmed text-sm uppercase tracking-wide tabular-nums">Random Chuck Norris Joke</div>
			<div wire:poll.{{ $refreshIntervalInSeconds }}s>
				<div class="self-center text-xs">{!! $joke['value']['joke'] !!}</div>
			</div>
		</div>
	</div>
</x-dashboard-tile>