@extends('layouts.app')

@section('title', 'Story')

@section('content')
    <div class="p-8 py-20">
       <div>
        <figure class="text-center">
            <img src="{{ asset('pictures/big-profile.jpeg') }}" alt="big-profile-picture" class="shadow-lg shadow-black mx-auto">
            <figcaption class="pt-4 pb-16">
                <p class="italic text-xl font-bold">Christopher George Latore Wallace</p>
                <p><b>Born:</b> May 21, 1972</p>
                <p><b>Died:</b> March 9, 1997</p>
            </figcaption>
        </figure>

        {{-- <hr class="max-w-xl mx-auto border-b border-red-600"> --}}

        <div class="biography">
            <h2>Who Was Biggie Smalls</h2>

            <p>Christopher Wallace, aka Biggie Smalls and the Notorious B.I.G. lived a short life. He was 24 years old when he was gunned down in 1997 in Los Angeles, a murder that has never been solved. Smalls was from New York and had almost single-handedly reinvented East Coast hip hop — overtaken in the early 1990s by the West Coast "g-funk" sound of Dr. Dre and Death Row Records. With his clear, powerful baritone, effortless flow on the mic and willingness to address the vulnerability, as well as the harshness, of the hustler lifestyle, Smalls swung the spotlight back towards New York and his label home, Bad Boy Records. He styled himself as a gangster and although he was no angel, in reality he was more of a performer than a hardened criminal. In this regard, he was similar to Tupac Shakur, his one-time friend turned bitter rival — a contest that spiraled horrifyingly out of control leaving neither man alive to tell the tale.</p>
            
            <h2>Early Life</h2>
            <p>Christopher George Latore Wallace was born on May 21, 1972, in Brooklyn, New York. His parents both hailed from the Caribbean island of Jamaica — his mom, Voletta taught preschool; his pop, Selwyn, was a welder and local Jamaican politician. Selwyn left the family when Biggie was two, but Voletta worked two jobs in order to send her son to a private school — the Roman Catholic Bishop Loughlin Memorial High School; alumni include Rudy Giuliani and former Primark CEO Arthur Ryan. But Biggie subsequently transferred to the George Westinghouse Career and Technical Education High School; alumni include the rappers DMX, Jay-Z and Busta Rhymes. Biggie had excelled at English, but often played truant at Westinghouse and dropped out altogether in 1989 at age 17.</p>
            <p>Acquiring the childhood nickname "Big" because of his plus-sized girth, he began selling drugs at 12, according to an interview he gave to the New York Times in 1994, working the streets near his mom's apartment on St. James Place. Voletta worked long hours and had no inkling of her son's activities. Biggie stepped up the drug dealing after quitting school and was soon in trouble with the law. He received a five-year probationary sentence in 1989 after being arrested on weapons possession charges. The following year he was arrested for violating that probation. The year after that, he was charged with dealing cocaine in North Carolina and reportedly spent nine months in jail while waiting to make bail.</p>
            
            <h2>Bad Boy Records</h2>
            <p>Biggie began rapping as a teenager to entertain people in his neighborhood. After he got out of jail, he made a demo tape as Biggie Smalls — named after a gang leader from the 1975 movie Let's Do It Again; also a nod to his childhood nickname. He had no serious plans to pursue a career in music — "It was fun just hearing myself on tape over beats," he later said in an Arista Records biography — but the tape found its way to The Source magazine, who were so impressed that they profiled Biggie in their Unsigned Hype column in March 1992; from there, Biggie was invited to record with other unsigned rappers. This recording came to the attention of Sean "Puffy" Combs, an A&R executive and producer who worked for the leading urban label Uptown Records — he started there as an intern in 1990. Combs arranged a record deal for Biggie, but left the label soon after, having fallen out with his boss, Andre Harrell. Combs went on to set up his own imprint, Bad Boy Records, and by mid-1992 Biggie had joined him.</p>
            <p>Before he had the chance to put anything out on Bad Boy, Uptown released music that Biggie recorded during his brief stint at the label, including a remix of Mary J. Blige's "Real Love" in August 1992 that featured a guest verse from The Notorious B.I.G. (He had been forced to change his recording name after a lawsuit; though he continued to be widely known as Biggie). In June 1993, the label released The Notorious BIG's first single as a solo artist, "Party and Bullshit."</p>

            <h2>Friendship With Tupac</h2>
            <p>That same year, as he worked on music for his debut album, Biggie Smalls met Tupac for the first time. Their encounter, detailed in Ben Westhoff's book, Original Gangstas, took place at a party held by an L.A. drug dealer. They ate, drank and smoked together, and Tupac, already a successful recording artist, gifted Biggie, then unknown outside New York, a bottle of Hennessy. After that, Tupac mentored Biggie whenever the two met up — at one point Biggie even asked if Tupac would become his manager. "Nah, stay with Puff," Tupac apparently said. "He will make you a star." Biggie was particularly concerned about money around that time because he became a father in August to T'yanna, his daughter, with high-school sweetheart, Jan. It has been reported that Biggie went back to drug dealing at this point, until Combs learned what he was up to and made him stop.</p>

            <h2>Feud With Tupac</h2>
            <p>But perhaps the most significant date in Biggie's rollercoaster year was November 30, 1994. This was the day Tupac was shot five times during a robbery in a recording-studio lobby in New York. Tupac urvived, but believed Biggie and his label boss Combs had orchestrated the attack. It didn't help that the B-side to Biggie's single "Big Poppa," released a little more than two months after the incident, featured the song "Who Shot Ya?" Tupac interpreted this as Biggie taunting him, and released an explosive diss track, "Hit 'Em Up," the following year, on which he claimed to have slept with Biggie's wife. (Evans would speak about this many years later in 2014, when she told MTV that Tupac once hit on her after a recording session, "but that ain't how I do business," she said.)</p>

            <h2>Death of Tupac</h2>
            <p>On September 7, 1996, his former friend Tupac was shot dead in Las Vegas. Nobody has ever been charged for the murder, but as a consequence of the ongoing East Coast/West Coast rap beef that Biggie and Tupac's rivalry had come to embody, and also of Tupac publicly blaming Biggie and Puffy for his non-fatal shooting in 1994, there were plenty who believed that the East Coast rap kingpins were behind Tupac's murder. (Both Biggie and Puffy strenuously denied their involvement and other key suspects have since emerged.)</p>
            <p>"It's a funny thing, I kind of realized how powerful Tupac and I was," reflected Biggie to the interviewer Jim Bean after his great rival's death. "We two individual people, we waged a coastal beef. You know what i'm saying? One man against one man made a whole West coast hate a whole East Coast. And vice versa. And that really bugged me out . . .Like yo, dude don't like me, so his whole coast don't like me. I don't like him, so my whole coast don't like him. It let me know how much strength I have. So what I'm trying to do now, I've got to be the one to try to flip it. And take my power and flip it, like, yo, because Pac can't be the one to try to squash it because he's gone. So I gotta take the weight on both sides."</p>

            <h2>Death</h2>
            <p>Sadly, Biggie did not live long enough to see the peace he wished for. He himself was murdered the early hours of March 9, 1997. It happened shortly after he left a Vibe magazine party at the Peterson Automotive Museum in Los Angeles. As Biggie's SUV — in which he was riding with a bodyguard and Lil' Cease — waited at a red light, a vehicle pulled up alongside it, and a gunman opened fire. His bodyguard rushed Biggie to the hospital, but it was already too late.</p>
            <p>Like that of Tupac, the killing of Biggie Smalls would never be solved. There would be no closure. Also like Tupac, Biggie would release a double album posthumously, in Biggie's case a mere fortnight after his demise. On March 25, 1997, Bad Boy released the spookily titled Life After Death. It had collaborations with artists including Puff Daddy, Jay-Z, 112, Lil' Kim, Mase, R Kelly, Darryl "DMC" McDaniels and Angela Winbush, and would be nominated for three Grammy awards — for best rap album, best solo rap performance for the lead single "Hypnotize," and best performance by a duo or group for its second single, "Mo Money Mo Problems," which featured Puff Daddy and Mase. The album was certified diamond in 2000 after selling more than 10 million copies.</p>
            <p>With his murder seen by many hip hop fans as a tit-for-tat killing, Biggie appeared to continue the beef from beyond the grave on the album track "Long Kiss Goodnight." The lyrics seemed to refer to the time Tupac got shot, and survived, in New York ("When my men bust, you just move with such stamina / Slugs missed you, I ain't mad atcha"). But according to the hip hop magazine XXL, the song was likely to have been recorded before Tupac's actual murder. Whatever the case may be, Biggie's shocking fate spelled the end of the East Coast/West Coast rap feud. Things had gotten way out of hand. Two of the greatest rappers to ever pick up a microphone were dead and gone. Hip hop's reputation had been dragged through the gutter. Nobody had any appetite for more.</p>
            <p>On March 18, 1997 Biggie's memorial service was held at the the Frank E. Campbell Funeral Chapel in Manhattan among 350 guests, which included Lil Kim, Mary J. Blige, Queen Latifah, Run DMC, Busta Rhymes, Foxy Brown and other high profile artists. Biggie lay in an open mahogany casket dressed in a white suit. After the service, his remains were cremated.</p>

            {{-- Image --}}
            <div class="my-8">
                <figure>
                    <img src="{{ asset('pictures/funeral.jpg') }}" alt="big-funeral">
                    <figcaption class="py-2 text-sm">Funeral of Christopher Wallace in Brooklyn 1997</figcaption>
                </figure>
            </div>
        </div>
        </div>
    </div>
@endsection