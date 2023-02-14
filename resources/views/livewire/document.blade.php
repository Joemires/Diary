<x-modal.card title="Document Reader" wire:model.defer="openDocumentModal" align="center" max-width="4xl" blur>
    {{-- <div id="pdf">
        <object width="100%" height="650" type="application/pdf" data="{{ asset('assets/doc/CWLD DIARY bok.pdf') }}#zoom=85&scrollbar=0&toolbar=0&navpanes=0" id="pdf_content" style="pointer-events: none;">
            <p>Insert your error message here, if the PDF cannot be displayed.</p>
        </object>
    </div> --}}
    <embed src="https://drive.google.com/file/d/13__3lwcu131tNObUU_0fxtkfbrlEPQaS/preview" width="100%" height="600px" />
    {{-- <iframe src="{{ asset('assets/doc/CWLD DIARY bok.pdf') }}" width="100%"></iframe> --}}

    <div class="relative max-w-sm m-auto">
    </div>
</x-modal.card>
