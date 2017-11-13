package SOLID.Liskov;

/**
 * Created by Oleh on 13.11.2017.
 */
public class main {
    public static void main(String[] args) {

        Bird bird = new Bird();

        BirdRun birdRun = new BirdRun(bird);
        birdRun.run();
    }
}
