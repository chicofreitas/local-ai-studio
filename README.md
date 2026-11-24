# local-ai-studio

This project uses Laravel Sail.

## Install instructions

`$ sail up`

`$ sail ollama ollama pull qwen3:0.6b`

### Testing the Brief Agent

`$ sail artisan tinker`

`> \App\Ai\Agents\BriefAgent::make()->prompt('Tell me about PHP');`

