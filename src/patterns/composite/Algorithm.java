package patterns.composite;

import java.util.ArrayList;
import java.util.List;

/**
 * Created by Oleh on 11.11.2017.
 */
public class Algorithm {

    private List<IAlgorithm> algorithms = new ArrayList<IAlgorithm>();

    public void addStep(IAlgorithm algorithm){
        algorithms.add(algorithm);
    }

    public void removeStep(IAlgorithm algorithm){
        algorithms.remove(algorithm);
    }

    public void createAlgorithm(){
        System.out.println("Початок роботи");

        for(IAlgorithm algorithm : algorithms){
            algorithm.applyAlgorithm();
        }
    }
}
