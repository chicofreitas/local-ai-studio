<?php

use Livewire\Component;

new class extends Component
{
    public string $title = 'Brief Prompt';

    public string $content = '';

    public array $history = [];

    public function save()
    {
        $validated = $this->validate([
            'content' => 'required|min:10',
        ]);
        array_push($this->history, [
            'question' => $validated['content'],
            'answer' => 'Lorem ipsum....',
        ]);
        //$this->content = $validated['content'];
    }
};
?>

<div class="relative max-w-lg mx-auto">

    <div class="py-2">
        <a class="font-medium">{{ $title }}</a>
    </div>

    <div class="">
        
            <flux:card class="mb-6">
                <flux:heading>{{ now() }}</flux:heading>
                <flux:text class="mt-1">Fake questions</flux:text>
            </flux:card>

            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis incidunt eligendi porro nulla accusantium vitae, illo libero officia velit deserunt, a sunt eos similique ad in fugit magni cumque vel.

            <div class="mb-6">
                Did you liked the answer?
            </div>

            @foreach($history as $h)
                <flux:card class="mb-6">
                    <flux:heading>{{ now() }}</flux:heading>
                    <flux:text class="mt-1">{{ $h['question']}}</flux:text>
                </flux:card>
                {{ $h['answer'] }}

                <div class="mb-6">
                    Did you liked the answer?
                </div>
            @endforeach
    </div>
    
    <div class="fixed bottom-0">
        <form wire:submit="save">
            <flux:field>
                <flux:label>Ask something</flux:label>
                <flux:input wire:model="content" class="w-full"/>
                <flux:error name="content" />
            </flux:field>

            <div class="mt-6">
                <flux:button type="submit">Send</flux:button>
            </div>
        </form>
    </div>
</div>