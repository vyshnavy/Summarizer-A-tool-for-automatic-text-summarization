import speech_recognition as sr
from os import path
from pydub import AudioSegment

#sound = AudioSegment.from_mp3("transcript.mp3")
#sound.export("transcript.wav", format="wav")




f = open('original_text.txt','r')
original_text = f.read()
f.close()


from transformers import pipeline

# using pipeline API for summarization task
summarization = pipeline("summarization")
#original_text = """
# Let's be clear, not all auto-generated content is harmful. Depending on your business, a mix of naturally created and auto-generated content may be the ideal way to create and publish content.

# For example, a finance comparison website which scores products across a wide range of criteria and aggregates the data needs some auto generated content to act as the skeleton where everything else sits on.al media has also been paying homage to the late actor. A week after Walker's death, about 5,000 people attended an outdoor memorial to him in Los Angeles. Most had never met him. Marcus Coleman told CNN he spent almost $1,000 to truck in a banner from Bakersfield for people to sign at the memorial. "It's like losing a friend or a really close family member ... even though he is an actor and we never really met face to face," Coleman said. "Sitting there, bringing his movies into your house or watching on TV, it's like getting to know somebody. It really, really hurts." Walker's younger brother Cody told People magazine that he was initially nervous about how "Furious 7" would turn out, but he is happy with the film. "It's bittersweet, but I think Paul would be proud," he said. CNN's Paul Vercammen contributed to this report.
# """
summary_text = summarization(original_text)[0]['summary_text']
#print("Input Text:",original_text)
#print("Summary:", summary_text)

f = open('output.txt','w')
f.write(str(summary_text))
f.close()
