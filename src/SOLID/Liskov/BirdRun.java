package SOLID.Liskov;

/**
 * Created by Oleh on 13.11.2017.
 */
public class BirdRun {

    private Bird bird;

    public BirdRun(Bird bird) {
        this.bird = bird;
    }

    public void run(){
        this.bird.fly();
    }
}
