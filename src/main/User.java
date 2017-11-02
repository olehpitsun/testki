package main;

/**
 * Created by Oleh on 02.11.2017.
 */
public class User {
    private String name;
    private boolean happy = false;

    public User(String name) {
        this.name = name;
    }

    public String getName() {
        return name;
    }

    public boolean isHappy() {
        return happy;
    }
}
